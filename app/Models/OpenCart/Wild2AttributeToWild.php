<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild2_attribute_to_wild', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Wild2AttributeToWild extends OpenCartModel
{
    protected $fillable = [
        'id',
        'category_id',
        'type',
        'to_field',
        'custom',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
    ];
}
