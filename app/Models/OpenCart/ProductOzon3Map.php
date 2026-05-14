<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_ozon3_map', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class ProductOzon3Map extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id_ozon',
        'offer_id',
        'comment',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id_ozon' => 'integer',
        'status' => 'boolean',
    ];
}
