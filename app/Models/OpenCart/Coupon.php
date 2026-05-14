<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_coupon', connection: 'opencart', primaryKey: 'coupon_id', incrementing: true, timestamps: false)]
class Coupon extends OpenCartModel
{
    protected $fillable = [
        'coupon_id',
        'name',
        'code',
        'type',
        'discount',
        'discount_2',
        'discount_3',
        'logged',
        'shipping',
        'total',
        'total_2',
        'total_3',
        'date_start',
        'date_end',
        'uses_total',
        'uses_customer',
        'status',
        'date_added',
    ];

    protected $casts = [
        'coupon_id' => 'integer',
        'discount' => 'float',
        'discount_2' => 'float',
        'discount_3' => 'float',
        'logged' => 'boolean',
        'shipping' => 'boolean',
        'total' => 'float',
        'total_2' => 'float',
        'total_3' => 'float',
        'uses_total' => 'integer',
        'status' => 'boolean',
    ];
}
