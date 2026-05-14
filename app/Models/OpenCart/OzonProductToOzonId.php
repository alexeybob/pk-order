<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_product_to_ozon_id', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class OzonProductToOzonId extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'ozon_product_id',
        'sku',
        'price',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'ozon_product_id' => 'integer',
        'price' => 'float',
    ];
}
