<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_sku_description', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerSkuDescription extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'sku_id',
        'sku',
        'store_id',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'sku_id' => 'integer',
        'store_id' => 'integer',
    ];
}
