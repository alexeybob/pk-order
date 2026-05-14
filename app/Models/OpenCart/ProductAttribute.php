<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_attribute', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductAttribute extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'attribute_id',
        'language_id',
        'text',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'attribute_id' => 'integer',
        'language_id' => 'integer',
    ];
}
