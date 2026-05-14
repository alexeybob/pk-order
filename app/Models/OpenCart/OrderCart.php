<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_cart', connection: 'opencart', primaryKey: 'cart_id', incrementing: true, timestamps: false)]
class OrderCart extends OpenCartModel
{
    protected $fillable = [
        'cart_id',
        'order_id',
        'cart',
    ];

    protected $casts = [
        'cart_id' => 'integer',
        'order_id' => 'integer',
    ];
}
