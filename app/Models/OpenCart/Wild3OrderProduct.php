<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild3_order_product', connection: 'opencart', primaryKey: 'order_product_id', incrementing: true, timestamps: false)]
class Wild3OrderProduct extends OpenCartModel
{
    protected $fillable = [
        'order_product_id',
        'order_id',
        'wild_order_id',
        'srid',
        'offer_id',
        'sku',
        'quantity',
    ];

    protected $casts = [
        'order_product_id' => 'integer',
        'order_id' => 'integer',
        'wild_order_id' => 'integer',
        'quantity' => 'integer',
    ];
}
