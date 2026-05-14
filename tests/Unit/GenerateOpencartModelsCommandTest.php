<?php

use App\Console\Commands\GenerateOpencartModels;

function invokeBuildModel(string $modelName, string $table, array $columns): string
{
    $command = new GenerateOpencartModels;
    $method = new ReflectionMethod($command, 'buildModel');

    /** @var string $generated */
    $generated = $method->invoke($command, $modelName, $table, $columns);

    return $generated;
}

function invokeToModelName(GenerateOpencartModels $command, string $table): string
{
    $method = new ReflectionMethod($command, 'toModelName');

    /** @var string $generated */
    $generated = $method->invoke($command, $table);

    return $generated;
}

function column(string $field, string $type, string $key = '', string $extra = ''): object
{
    return (object) [
        'Field' => $field,
        'Type' => $type,
        'Key' => $key,
        'Extra' => $extra,
    ];
}

test('it generates models with table attribute and base opencart model', function () {
    $generated = invokeBuildModel('Product', 'oc_product', [
        column('product_id', 'int(11)', 'PRI', 'auto_increment'),
        column('status', 'tinyint(1)'),
        column('date_added', 'datetime'),
        column('date_modified', 'datetime'),
    ]);

    expect($generated)
        ->toContain('use App\\Models\\OpenCart\\Attributes\\Table;')
        ->toContain("#[Table('oc_product', connection: 'opencart', primaryKey: 'product_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]")
        ->toContain('class Product extends OpenCartModel')
        ->toContain("'status' => 'boolean'")
        ->not->toContain('protected $connection = \'opencart\';')
        ->not->toContain('protected $table = \'oc_product\';')
        ->not->toContain('public $incrementing =')
        ->not->toContain('protected $primaryKey =')
        ->not->toContain('public $timestamps = false;');
});

test('it generates attribute with timestamps disabled when opencart columns are missing', function () {
    $generated = invokeBuildModel('Setting', 'oc_setting', [
        column('setting_id', 'int(11)', 'PRI'),
        column('key', 'varchar(64)'),
        column('value', 'text'),
    ]);

    expect($generated)
        ->toContain("#[Table('oc_setting', connection: 'opencart', primaryKey: 'setting_id', incrementing: false, timestamps: false)]")
        ->not->toContain("createdAt: 'date_added'")
        ->not->toContain("updatedAt: 'date_modified'");
});

test('it maps reserved php keywords to safe model names', function () {
    $command = new GenerateOpencartModels;

    expect(invokeToModelName($command, 'oc_return'))->toBe('ReturnModel');
});

test('it appends numeric suffix for duplicate model names', function () {
    $command = new GenerateOpencartModels;

    expect(invokeToModelName($command, 'oc_news'))->toBe('News')
        ->and(invokeToModelName($command, 'oc_news'))->toBe('News2');
});
