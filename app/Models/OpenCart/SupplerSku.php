<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_sku', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerSku extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'sku_id',
        'product_id',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'sku_id' => 'integer',
        'product_id' => 'integer',
    ];
}
