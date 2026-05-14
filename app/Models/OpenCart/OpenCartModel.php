<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

class OpenCartModel extends Model
{
    /**
     * @var array<class-string, array{name: string, connection: string|null, primaryKey: string|null, incrementing: bool, timestamps: bool, createdAt: string|null, updatedAt: string|null}|null>
     */
    protected static array $resolvedTableAttributes = [];

    protected ?string $createdAtColumnFromAttribute = null;

    protected ?string $updatedAtColumnFromAttribute = null;

    public function __construct(array $attributes = [])
    {
        $this->applyTableAttributeConfiguration();

        parent::__construct($attributes);
    }

    public function getCreatedAtColumn(): string
    {
        if ($this->createdAtColumnFromAttribute !== null) {
            return $this->createdAtColumnFromAttribute;
        }

        return parent::getCreatedAtColumn();
    }

    public function getUpdatedAtColumn(): string
    {
        if ($this->updatedAtColumnFromAttribute !== null) {
            return $this->updatedAtColumnFromAttribute;
        }

        return parent::getUpdatedAtColumn();
    }

    protected function applyTableAttributeConfiguration(): void
    {
        $configuration = $this->resolveTableAttributeConfiguration();

        if ($configuration === null) {
            return;
        }

        $this->table = $configuration['name'];
        $this->connection = $configuration['connection'];

        if ($configuration['primaryKey'] !== null) {
            $this->primaryKey = $configuration['primaryKey'];
        }

        $this->incrementing = $configuration['incrementing'];
        $this->timestamps = $configuration['timestamps'];
        $this->createdAtColumnFromAttribute = $configuration['createdAt'];
        $this->updatedAtColumnFromAttribute = $configuration['updatedAt'];
    }

    /**
     * @return array{name: string, connection: string|null, primaryKey: string|null, incrementing: bool, timestamps: bool, createdAt: string|null, updatedAt: string|null}|null
     */
    protected function resolveTableAttributeConfiguration(): ?array
    {
        $class = static::class;

        if (array_key_exists($class, static::$resolvedTableAttributes)) {
            return static::$resolvedTableAttributes[$class];
        }

        $reflection = new \ReflectionClass($class);
        $tableAttribute = $reflection->getAttributes(Table::class)[0] ?? null;

        if ($tableAttribute === null) {
            static::$resolvedTableAttributes[$class] = null;

            return null;
        }

        /** @var Table $instance */
        $instance = $tableAttribute->newInstance();

        static::$resolvedTableAttributes[$class] = [
            'name' => $instance->name,
            'connection' => $instance->connection,
            'primaryKey' => $instance->primaryKey,
            'incrementing' => $instance->incrementing,
            'timestamps' => $instance->timestamps,
            'createdAt' => $instance->createdAt,
            'updatedAt' => $instance->updatedAt,
        ];

        return static::$resolvedTableAttributes[$class];
    }
}
