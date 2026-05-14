<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_discount', connection: 'opencart', primaryKey: 'product_discount_id', incrementing: true, timestamps: false)]
class ProductDiscount extends OpenCartModel
{
    protected $fillable = [
        'product_discount_id',
        'product_id',
        'customer_group_id',
        'quantity',
        'priority',
        'price',
        'date_start',
        'date_end',
    ];

    protected $casts = [
        'product_discount_id' => 'integer',
        'product_id' => 'integer',
        'customer_group_id' => 'integer',
        'quantity' => 'integer',
        'priority' => 'integer',
        'price' => 'float',
    ];
}
