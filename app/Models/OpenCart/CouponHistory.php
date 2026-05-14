<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_coupon_history', connection: 'opencart', primaryKey: 'coupon_history_id', incrementing: true, timestamps: false)]
class CouponHistory extends OpenCartModel
{
    protected $fillable = [
        'coupon_history_id',
        'coupon_id',
        'order_id',
        'customer_id',
        'amount',
        'date_added',
    ];

    protected $casts = [
        'coupon_history_id' => 'integer',
        'coupon_id' => 'integer',
        'order_id' => 'integer',
        'customer_id' => 'integer',
        'amount' => 'float',
    ];
}
