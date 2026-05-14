<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_to_category', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductToCategory extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'category_id',
        'main_category',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'category_id' => 'integer',
        'main_category' => 'boolean',
    ];
}
