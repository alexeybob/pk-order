<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_attribute_group_description', connection: 'opencart', primaryKey: 'attribute_group_id', incrementing: false, timestamps: false)]
class AttributeGroupDescription extends OpenCartModel
{
    protected $fillable = [
        'attribute_group_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'attribute_group_id' => 'integer',
        'language_id' => 'integer',
    ];
}
