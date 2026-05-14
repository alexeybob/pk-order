<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_simple_cart', connection: 'opencart', primaryKey: 'simple_cart_id', incrementing: true, timestamps: false)]
class SimpleCart extends OpenCartModel
{
    protected $fillable = [
        'simple_cart_id',
        'store_id',
        'customer_id',
        'email',
        'firstname',
        'lastname',
        'telephone',
        'products',
        'date_added',
    ];

    protected $casts = [
        'simple_cart_id' => 'integer',
        'store_id' => 'integer',
        'customer_id' => 'integer',
    ];
}
