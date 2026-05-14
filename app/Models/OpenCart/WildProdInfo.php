<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild_prod_info', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WildProdInfo extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'barcode',
        'length',
        'width',
        'height',
        'vendorCode',
        'date_update',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
    ];
}
