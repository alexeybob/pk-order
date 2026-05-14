<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_fbs_order', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class FbsOrder extends OpenCartModel
{
    protected $fillable = [
        'id',
        'order_id',
        'order_status_id',
        'fbs_order_id',
        'json_data',
        'date_added',
        'date_modified',
        'date_delivery',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'order_status_id' => 'integer',
        'fbs_order_id' => 'integer',
    ];
}
