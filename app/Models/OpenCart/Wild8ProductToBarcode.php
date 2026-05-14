<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild8_product_to_barcode', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Wild8ProductToBarcode extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'offer_id',
        'barcode',
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
