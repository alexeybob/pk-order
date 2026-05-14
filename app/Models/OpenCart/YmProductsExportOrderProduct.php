<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_products_export_order_products', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmProductsExportOrderProduct extends OpenCartModel
{
    protected $fillable = [
        'id',
        'order_id',
        'cabinet_code',
        'posting_number',
        'sku',
        'quantity',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'quantity' => 'integer',
    ];
}
