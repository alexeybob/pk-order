<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_voucher_history', connection: 'opencart', primaryKey: 'voucher_history_id', incrementing: true, timestamps: false)]
class VoucherHistory extends OpenCartModel
{
    protected $fillable = [
        'voucher_history_id',
        'voucher_id',
        'order_id',
        'amount',
        'date_added',
    ];

    protected $casts = [
        'voucher_history_id' => 'integer',
        'voucher_id' => 'integer',
        'order_id' => 'integer',
        'amount' => 'float',
    ];
}
