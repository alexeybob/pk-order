<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_supplier_active', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class SupplierActive extends OpenCartModel
{
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'offer_id',
        'barcode',
        'quantity',
        'status',
        'sys_status',
        'supplier_id',
        'supplier_date',
        'date_update',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer',
        'sys_status' => 'integer',
    ];
}
