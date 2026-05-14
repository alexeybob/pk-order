<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild2_prod_info', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Wild2ProdInfo extends OpenCartModel
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
