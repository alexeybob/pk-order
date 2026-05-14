<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild5_product_data_in_the_mp', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Wild5ProductDataInTheMp extends OpenCartModel
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
        'comment',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'imtId' => 'integer',
        'nmId' => 'integer',
        'chrtId' => 'integer',
        'status' => 'boolean',
    ];
}
