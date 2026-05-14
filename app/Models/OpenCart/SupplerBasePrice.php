<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_base_price', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerBasePrice extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'product_id',
        'model',
        'bprice',
        'bpack',
        'brate',
        'bsuppler',
        'bdisc',
        'bmin',
        'bav',
        'bmax',
        'optimal',
        'market_percent_to_price',
        'market_percent_to_bprice',
        'market_percent_to_bdprice',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'product_id' => 'integer',
        'bprice' => 'float',
        'bpack' => 'integer',
        'brate' => 'float',
        'bdisc' => 'float',
        'bmin' => 'float',
        'bav' => 'float',
        'bmax' => 'float',
        'optimal' => 'float',
        'market_percent_to_price' => 'float',
        'market_percent_to_bprice' => 'float',
        'market_percent_to_bdprice' => 'float',
    ];
}
