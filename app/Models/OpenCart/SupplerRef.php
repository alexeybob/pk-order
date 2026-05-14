<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_ref', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerRef extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'product_id',
        'ident',
        'url',
        'price',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'product_id' => 'integer',
        'price' => 'float',
    ];
}
