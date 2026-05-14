<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon2_order_product', connection: 'opencart', primaryKey: 'order_product_id', incrementing: true, timestamps: false)]
class Ozon2OrderProduct extends OpenCartModel
{
    protected $fillable = [
        'order_product_id',
        'order_id',
        'ozon_order_id',
        'offer_id',
        'sku',
        'quantity',
    ];

    protected $casts = [
        'order_product_id' => 'integer',
        'order_id' => 'integer',
        'ozon_order_id' => 'integer',
        'quantity' => 'integer',
    ];
}
