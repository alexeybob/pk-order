<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_product', connection: 'opencart', primaryKey: 'order_product_id', incrementing: true, timestamps: false)]
class OrderProduct extends OpenCartModel
{
    protected $fillable = [
        'order_product_id',
        'order_id',
        'product_id',
        'name',
        'model',
        'quantity',
        'price',
        'total',
        'tax',
        'reward',
        'bprice',
        'sku',
        'upc',
        'location',
    ];

    protected $casts = [
        'order_product_id' => 'integer',
        'order_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer',
        'price' => 'float',
        'total' => 'float',
        'tax' => 'float',
        'reward' => 'integer',
        'bprice' => 'float',
    ];
}
