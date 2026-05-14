<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_attribute_group_tooltip', connection: 'opencart', primaryKey: 'attribute_group_id', incrementing: false, timestamps: false)]
class AttributeGroupTooltip extends OpenCartModel
{
    protected $fillable = [
        'attribute_group_id',
        'language_id',
        'tooltip',
    ];

    protected $casts = [
        'attribute_group_id' => 'integer',
        'language_id' => 'integer',
    ];
}
