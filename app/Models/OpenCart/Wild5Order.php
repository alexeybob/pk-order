<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild5_order', connection: 'opencart', primaryKey: 'order_id', incrementing: false, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class Wild5Order extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'order_status_id',
        'wild_order_id',
        'srid',
        'order_barcode',
        'order_barcode_num',
        'order_barcode_sticker',
        'date_added',
        'date_modified',
        'date_shipment',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'order_status_id' => 'integer',
        'wild_order_id' => 'integer',
    ];
}
