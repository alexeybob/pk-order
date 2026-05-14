<?php

namespace App\Models\OpenCart\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class Table
{
    public function __construct(
        public string $name,
        public ?string $connection = null,
        public ?string $primaryKey = null,
        public bool $incrementing = false,
        public bool $timestamps = false,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}
}
