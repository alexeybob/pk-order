<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild4_product_id', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Wild4ProductId extends OpenCartModel
{
    protected $fillable = [
        'id',
        'barcode',
        'product_id',
        'po_id_0',
        'pov_id_0',
        'po_id_1',
        'pov_id_1',
        'price',
        'quantity',
        'upd_price',
        'full',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'po_id_0' => 'integer',
        'pov_id_0' => 'integer',
        'po_id_1' => 'integer',
        'pov_id_1' => 'integer',
        'price' => 'float',
        'quantity' => 'integer',
        'upd_price' => 'integer',
    ];
}
