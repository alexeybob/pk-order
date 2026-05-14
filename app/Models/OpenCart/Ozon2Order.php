<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon2_order', connection: 'opencart', primaryKey: 'order_id', incrementing: false, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class Ozon2Order extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'order_status_id',
        'ozon_order_id',
        'posting_number',
        'order_barcode',
        'date_added',
        'date_modified',
        'date_shipment',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'order_status_id' => 'integer',
        'ozon_order_id' => 'integer',
    ];
}
