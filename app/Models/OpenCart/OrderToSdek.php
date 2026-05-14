<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_to_sdek', connection: 'opencart', primaryKey: 'order_to_sdek_id', incrementing: true, timestamps: false)]
class OrderToSdek extends OpenCartModel
{
    protected $fillable = [
        'order_to_sdek_id',
        'order_id',
        'cityId',
        'pvz_code',
    ];

    protected $casts = [
        'order_to_sdek_id' => 'integer',
        'order_id' => 'integer',
        'cityId' => 'integer',
    ];
}
