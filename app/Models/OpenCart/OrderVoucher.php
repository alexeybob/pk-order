<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_voucher', connection: 'opencart', primaryKey: 'order_voucher_id', incrementing: true, timestamps: false)]
class OrderVoucher extends OpenCartModel
{
    protected $fillable = [
        'order_voucher_id',
        'order_id',
        'voucher_id',
        'description',
        'code',
        'from_name',
        'from_email',
        'to_name',
        'to_email',
        'voucher_theme_id',
        'message',
        'amount',
    ];

    protected $casts = [
        'order_voucher_id' => 'integer',
        'order_id' => 'integer',
        'voucher_id' => 'integer',
        'voucher_theme_id' => 'integer',
        'amount' => 'float',
    ];
}
