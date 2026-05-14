<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_coupon_category', connection: 'opencart', primaryKey: 'coupon_id', incrementing: false, timestamps: false)]
class CouponCategory extends OpenCartModel
{
    protected $fillable = [
        'coupon_id',
        'category_id',
    ];

    protected $casts = [
        'coupon_id' => 'integer',
        'category_id' => 'integer',
    ];
}
