<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild_attribute_to_wild', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WildAttributeToWild extends OpenCartModel
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
