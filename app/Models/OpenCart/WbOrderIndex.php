<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wb_order_index', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class WbOrderIndex extends OpenCartModel
{
    protected $fillable = [
        'id',
        'cabinet_id',
        'cabinet_code',
        'shop_order_id',
        'wild_order_id',
        'srid',
        'offer_id',
        'sku',
        'quantity',
        'order_status_id',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'id' => 'integer',
        'cabinet_id' => 'integer',
        'shop_order_id' => 'integer',
        'wild_order_id' => 'integer',
        'quantity' => 'integer',
        'order_status_id' => 'integer',
    ];
}
