<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_mp_order_product', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class MpOrderProduct extends OpenCartModel
{
    protected $fillable = [
        'id',
        'order_id',
        'mp_order_id',
        'offer_id',
        'sku',
        'quantity',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'quantity' => 'integer',
    ];
}
