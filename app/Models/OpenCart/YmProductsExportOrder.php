<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_products_export_orders', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmProductsExportOrder extends OpenCartModel
{
    protected $fillable = [
        'id',
        'cabinet_code',
        'order_id',
        'order_status_id',
        'posting_number',
        'order_barcode',
        'date_shipment',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'order_status_id' => 'integer',
    ];
}
