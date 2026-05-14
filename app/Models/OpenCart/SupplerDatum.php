<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_data', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerDatum extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'form_id',
        'cat_ext',
        'category_id',
        'pic_int',
        'cat_plus',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'form_id' => 'integer',
        'category_id' => 'integer',
    ];
}
