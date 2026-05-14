<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wb_coefficient_discount', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WbCoefficientDiscount extends OpenCartModel
{
    protected $fillable = [
        'id',
        'discount',
        'MP',
    ];

    protected $casts = [
        'id' => 'integer',
        'discount' => 'integer',
    ];
}
