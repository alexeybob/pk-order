<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_supplier_product', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class SupplierProduct extends OpenCartModel
{
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'offer_id',
        'barcode',
        'quantity',
        'status',
        'supplier_id',
        'date_update',
        'date_added',
        'supplier_date',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer',
    ];
}
