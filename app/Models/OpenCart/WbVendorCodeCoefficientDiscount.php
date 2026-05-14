<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wb_vendor_code_coefficient_discount', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WbVendorCodeCoefficientDiscount extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'model',
        'discount',
        'changeprice',
        'MP',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'discount' => 'integer',
        'changeprice' => 'float',
    ];
}
