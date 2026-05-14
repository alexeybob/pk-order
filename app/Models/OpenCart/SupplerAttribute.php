<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_attributes', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerAttribute extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'form_id',
        'attr_ext',
        'attr_point',
        'attribute_id',
        'tags',
        'filter_group_id',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'form_id' => 'integer',
        'attribute_id' => 'integer',
        'filter_group_id' => 'integer',
    ];
}
