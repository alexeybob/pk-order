<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_mp_order', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class MpOrder extends OpenCartModel
{
    protected $fillable = [
        'id',
        'order_id',
        'order_status_id',
        'mp_order_id',
        'posting_number',
        'order_barcode',
        'order_barcode_num',
        'order_barcode_sticker',
        'json_data',
        'mp_name',
        'date_added',
        'date_modified',
        'date_shipment',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'order_status_id' => 'integer',
    ];
}
