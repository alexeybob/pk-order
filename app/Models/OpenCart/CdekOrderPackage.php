<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_package', connection: 'opencart', primaryKey: 'package_id', incrementing: true, timestamps: false)]
class CdekOrderPackage extends OpenCartModel
{
    protected $fillable = [
        'package_id',
        'order_id',
        'number',
        'brcode',
        'weight',
        'size_a',
        'size_b',
        'size_c',
    ];

    protected $casts = [
        'package_id' => 'integer',
        'order_id' => 'integer',
        'weight' => 'integer',
        'size_a' => 'float',
        'size_b' => 'float',
        'size_c' => 'float',
    ];
}
