<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon2_product_id', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Ozon2ProductId extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'po_id_0',
        'pov_id_0',
        'po_id_1',
        'pov_id_1',
        'price',
        'oldprice',
        'quantity',
        'ozon_sku',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'po_id_0' => 'integer',
        'pov_id_0' => 'integer',
        'po_id_1' => 'integer',
        'pov_id_1' => 'integer',
        'price' => 'float',
        'oldprice' => 'float',
        'quantity' => 'integer',
    ];
}
