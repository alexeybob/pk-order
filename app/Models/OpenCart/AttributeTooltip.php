<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_attribute_tooltip', connection: 'opencart', primaryKey: 'attribute_id', incrementing: false, timestamps: false)]
class AttributeTooltip extends OpenCartModel
{
    protected $fillable = [
        'attribute_id',
        'language_id',
        'tooltip',
    ];

    protected $casts = [
        'attribute_id' => 'integer',
        'language_id' => 'integer',
    ];
}
