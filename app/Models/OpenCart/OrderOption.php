<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_option', connection: 'opencart', primaryKey: 'order_option_id', incrementing: true, timestamps: false)]
class OrderOption extends OpenCartModel
{
    protected $fillable = [
        'order_option_id',
        'order_id',
        'order_product_id',
        'product_option_id',
        'product_option_value_id',
        'name',
        'value',
        'type',
    ];

    protected $casts = [
        'order_option_id' => 'integer',
        'order_id' => 'integer',
        'order_product_id' => 'integer',
        'product_option_id' => 'integer',
        'product_option_value_id' => 'integer',
    ];
}
