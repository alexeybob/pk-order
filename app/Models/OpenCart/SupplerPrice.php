<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_price', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerPrice extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'form_id',
        'nom',
        'ident',
        'param',
        'point',
        'noprice',
        'paramnp',
        'pointnp',
        'baseprice',
        'mratek',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'form_id' => 'integer',
        'baseprice' => 'integer',
        'mratek' => 'float',
    ];
}
