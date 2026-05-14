<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_attribute', connection: 'opencart', primaryKey: 'attribute_id', incrementing: true, timestamps: false)]
class Attribute extends OpenCartModel
{
    protected $fillable = [
        'attribute_id',
        'attribute_group_id',
        'sort_order',
    ];

    protected $casts = [
        'attribute_id' => 'integer',
        'attribute_group_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
