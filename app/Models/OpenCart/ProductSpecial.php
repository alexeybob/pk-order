<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_special', connection: 'opencart', primaryKey: 'product_special_id', incrementing: true, timestamps: false)]
class ProductSpecial extends OpenCartModel
{
    protected $fillable = [
        'product_special_id',
        'product_id',
        'customer_group_id',
        'priority',
        'price',
        'date_start',
        'date_end',
    ];

    protected $casts = [
        'product_special_id' => 'integer',
        'product_id' => 'integer',
        'customer_group_id' => 'integer',
        'priority' => 'integer',
        'price' => 'float',
    ];
}
