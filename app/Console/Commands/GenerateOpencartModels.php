<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

#[Signature('opencart:generate-models {--table=* : Specific tables} {--force : Overwrite existing}')]
#[Description('Generate Eloquent models from OpenCart database for ide-helper')]
class GenerateOpencartModels extends Command
{
    /** @var array<string, true> */
    private array $usedModelNames = [];

    public function handle(): int
    {
        if (! array_key_exists('opencart', config('database.connections', []))) {
            $this->error('Database connection [opencart] is not configured.');

            return self::FAILURE;
        }

        DB::purge('opencart');
        DB::reconnect('opencart');

        $tables = $this->option('table');
        $force = (bool) $this->option('force');

        if (empty($tables)) {
            $dbName = config('database.connections.opencart.database');
            $key = "Tables_in_{$dbName}";
            $rows = DB::connection('opencart')->select('SHOW TABLES');
            $tables = array_map(static fn ($row) => $row->$key, $rows);
        }

        $path = app_path('Models/OpenCart');
        File::ensureDirectoryExists($path);

        $generated = 0;

        foreach ($tables as $table) {
            $modelName = $this->toModelName($table);
            $file = "{$path}/{$modelName}.php";

            if (File::exists($file) && ! $force) {
                $this->warn("Skip existing: {$modelName}");

                continue;
            }

            $columns = $this->getColumns($table);
            $content = $this->buildModel($modelName, $table, $columns);

            File::put($file, $content);
            $this->info("Generated: {$modelName} ← {$table}");
            $generated++;
        }

        $this->newLine();
        $this->info("{$generated} models generated. Now run:");
        $this->line('  ./vendor/bin/sail artisan ide-helper:models "App\\Models\\OpenCart\\*" --write');

        return self::SUCCESS;
    }

    private function toModelName(string $table): string
    {
        $clean = preg_replace('/^oc_/', '', $table) ?? $table;
        $name = Str::studly(Str::singular($clean));

        if ($name === '' || preg_match('/^[0-9]/', $name) === 1) {
            $name = 'Table'.$name;
        }

        if ($this->isProhibitedClassName($name)) {
            $name .= 'Model';
        }

        $baseName = $name;
        $counter = 2;

        while (isset($this->usedModelNames[$name])) {
            $name = $baseName.$counter;
            $counter++;
        }

        $this->usedModelNames[$name] = true;

        return $name;
    }

    private function isProhibitedClassName(string $name): bool
    {
        if (preg_match('/^[A-Za-z_][A-Za-z0-9_]*$/', $name) !== 1) {
            return true;
        }

        $tokens = token_get_all('<?php class '.$name.' {}');
        $seenClassKeyword = false;

        foreach ($tokens as $token) {
            if (! is_array($token)) {
                continue;
            }

            $tokenId = $token[0];

            if ($tokenId === T_CLASS) {
                $seenClassKeyword = true;

                continue;
            }

            if ($seenClassKeyword && $tokenId !== T_WHITESPACE) {
                return $tokenId !== T_STRING;
            }
        }

        return true;
    }

    private function getColumns(string $table): array
    {
        return DB::connection('opencart')
            ->select("SHOW COLUMNS FROM `{$table}`");
    }

    private function buildModel(string $name, string $table, array $columns): string
    {
        $fillable = [];
        $casts = [];
        $hasCreatedAt = false;
        $hasUpdatedAt = false;
        $primaryKey = null;
        $isIncrementing = false;

        foreach ($columns as $col) {
            $field = $col->Field;
            $fillable[] = "'{$field}'";

            if ($primaryKey === null && str_contains($col->Key ?? '', 'PRI')) {
                $primaryKey = $field;
                $isIncrementing = str_contains(strtolower($col->Extra ?? ''), 'auto_increment')
                    && str_contains(strtolower($col->Type ?? ''), 'int');
            }

            if ($field === 'date_added') {
                $hasCreatedAt = true;
            }

            if ($field === 'date_modified') {
                $hasUpdatedAt = true;
            }

            if (str_contains($col->Type, 'tinyint(1)')) {
                $casts[] = "'{$field}' => 'boolean'";
            } elseif (str_contains($col->Type, 'decimal') || str_contains($col->Type, 'float')) {
                $casts[] = "'{$field}' => 'float'";
            } elseif (str_contains($col->Type, 'int')) {
                $casts[] = "'{$field}' => 'integer'";
            }
        }

        $fillableStr = implode(",\n        ", $fillable);
        $castsStr = empty($casts)
            ? ''
            : "\n\n    protected \$casts = [\n        ".implode(",\n        ", $casts).",\n    ];";

        $usesOpenCartTimestamps = $hasCreatedAt && $hasUpdatedAt;

        $attributeArgs = [
            "'{$table}'",
            "connection: 'opencart'",
        ];

        if ($primaryKey !== null) {
            $attributeArgs[] = "primaryKey: '{$primaryKey}'";
        }

        $attributeArgs[] = 'incrementing: '.($isIncrementing ? 'true' : 'false');
        $attributeArgs[] = 'timestamps: '.($usesOpenCartTimestamps ? 'true' : 'false');

        if ($usesOpenCartTimestamps) {
            $attributeArgs[] = "createdAt: 'date_added'";
            $attributeArgs[] = "updatedAt: 'date_modified'";
        }

        $tableAttribute = '#[Table('.implode(', ', $attributeArgs).')]';

        return <<<PHP
<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

{$tableAttribute}
class {$name} extends OpenCartModel
{
    protected \$fillable = [
        {$fillableStr},
    ];{$castsStr}
}

PHP;
    }
}
