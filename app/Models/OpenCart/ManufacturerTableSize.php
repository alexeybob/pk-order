<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_manufacturer_table_sizes', connection: 'opencart', primaryKey: 'table_id', incrementing: true, timestamps: false)]
class ManufacturerTableSize extends OpenCartModel
{
    protected $fillable = [
        'table_id',
        'manufacturer_id',
        'category_id',
        'related_category_id',
        'description',
    ];

    protected $casts = [
        'table_id' => 'integer',
        'manufacturer_id' => 'integer',
        'category_id' => 'integer',
        'related_category_id' => 'integer',
    ];
}
