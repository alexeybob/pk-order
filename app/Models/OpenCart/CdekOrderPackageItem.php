<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_package_item', connection: 'opencart', primaryKey: 'package_item_id', incrementing: true, timestamps: false)]
class CdekOrderPackageItem extends OpenCartModel
{
    protected $fillable = [
        'package_item_id',
        'package_id',
        'order_id',
        'ware_key',
        'comment',
        'weight',
        'amount',
        'cost',
        'payment',
    ];

    protected $casts = [
        'package_item_id' => 'integer',
        'package_id' => 'integer',
        'order_id' => 'integer',
        'weight' => 'integer',
        'amount' => 'integer',
        'cost' => 'float',
        'payment' => 'float',
    ];
}
