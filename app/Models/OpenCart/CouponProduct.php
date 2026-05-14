<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_coupon_product', connection: 'opencart', primaryKey: 'coupon_product_id', incrementing: true, timestamps: false)]
class CouponProduct extends OpenCartModel
{
    protected $fillable = [
        'coupon_product_id',
        'coupon_id',
        'product_id',
    ];

    protected $casts = [
        'coupon_product_id' => 'integer',
        'coupon_id' => 'integer',
        'product_id' => 'integer',
    ];
}
