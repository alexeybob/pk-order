<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_yoomoney_payment', connection: 'opencart', primaryKey: 'order_id', incrementing: false, timestamps: false)]
class YoomoneyPayment extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'payment_id',
        'status',
        'amount',
        'currency',
        'payment_method_id',
        'paid',
        'created_at',
        'captured_at',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'amount' => 'float',
    ];
}
