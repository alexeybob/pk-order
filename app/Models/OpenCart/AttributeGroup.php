<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_attribute_group', connection: 'opencart', primaryKey: 'attribute_group_id', incrementing: true, timestamps: false)]
class AttributeGroup extends OpenCartModel
{
    protected $fillable = [
        'attribute_group_id',
        'sort_order',
    ];

    protected $casts = [
        'attribute_group_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
