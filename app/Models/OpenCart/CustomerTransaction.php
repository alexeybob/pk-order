<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_transaction', connection: 'opencart', primaryKey: 'customer_transaction_id', incrementing: true, timestamps: false)]
class CustomerTransaction extends OpenCartModel
{
    protected $fillable = [
        'customer_transaction_id',
        'customer_id',
        'order_id',
        'description',
        'amount',
        'date_added',
    ];

    protected $casts = [
        'customer_transaction_id' => 'integer',
        'customer_id' => 'integer',
        'order_id' => 'integer',
        'amount' => 'float',
    ];
}
