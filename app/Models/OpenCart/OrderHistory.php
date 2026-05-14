<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_history', connection: 'opencart', primaryKey: 'order_history_id', incrementing: true, timestamps: false)]
class OrderHistory extends OpenCartModel
{
    protected $fillable = [
        'order_history_id',
        'order_id',
        'order_status_id',
        'notify',
        'comment',
        'date_added',
    ];

    protected $casts = [
        'order_history_id' => 'integer',
        'order_id' => 'integer',
        'order_status_id' => 'integer',
        'notify' => 'boolean',
    ];
}
