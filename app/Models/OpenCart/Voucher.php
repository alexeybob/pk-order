<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_voucher', connection: 'opencart', primaryKey: 'voucher_id', incrementing: true, timestamps: false)]
class Voucher extends OpenCartModel
{
    protected $fillable = [
        'voucher_id',
        'order_id',
        'code',
        'from_name',
        'from_email',
        'to_name',
        'to_email',
        'voucher_theme_id',
        'message',
        'amount',
        'status',
        'date_added',
    ];

    protected $casts = [
        'voucher_id' => 'integer',
        'order_id' => 'integer',
        'voucher_theme_id' => 'integer',
        'amount' => 'float',
        'status' => 'boolean',
    ];
}
