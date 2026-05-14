<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_add_service', connection: 'opencart', primaryKey: 'service_id', incrementing: false, timestamps: false)]
class CdekOrderAddService extends OpenCartModel
{
    protected $fillable = [
        'service_id',
        'order_id',
        'description',
        'price',
    ];

    protected $casts = [
        'service_id' => 'integer',
        'order_id' => 'integer',
        'price' => 'float',
    ];
}
