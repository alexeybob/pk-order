<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild_product_to_barcode_tmp', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WildProductToBarcodeTmp extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'offer_id',
        'barcode',
        'orig_color',
        'orig_size',
        'color',
        'size',
        'vendorCode',
        'imtId',
        'nmId',
        'chrtId',
        'date_update',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'imtId' => 'integer',
        'nmId' => 'integer',
        'chrtId' => 'integer',
    ];
}
