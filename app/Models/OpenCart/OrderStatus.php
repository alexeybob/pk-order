<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_status', connection: 'opencart', primaryKey: 'order_status_id', incrementing: true, timestamps: false)]
class OrderStatus extends OpenCartModel
{
    protected $fillable = [
        'order_status_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'order_status_id' => 'integer',
        'language_id' => 'integer',
    ];
}
