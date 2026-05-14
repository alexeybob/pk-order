<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_recurring_transaction', connection: 'opencart', primaryKey: 'order_recurring_transaction_id', incrementing: true, timestamps: false)]
class OrderRecurringTransaction extends OpenCartModel
{
    protected $fillable = [
        'order_recurring_transaction_id',
        'order_recurring_id',
        'created',
        'amount',
        'type',
    ];

    protected $casts = [
        'order_recurring_transaction_id' => 'integer',
        'order_recurring_id' => 'integer',
        'amount' => 'float',
    ];
}
