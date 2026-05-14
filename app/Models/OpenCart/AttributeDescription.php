<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_attribute_description', connection: 'opencart', primaryKey: 'attribute_id', incrementing: false, timestamps: false)]
class AttributeDescription extends OpenCartModel
{
    protected $fillable = [
        'attribute_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'attribute_id' => 'integer',
        'language_id' => 'integer',
    ];
}
