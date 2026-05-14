<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_option', connection: 'opencart', primaryKey: 'option_id', incrementing: true, timestamps: false)]
class Option extends OpenCartModel
{
    protected $fillable = [
        'option_id',
        'type',
        'sort_order',
        'dublicate_attribute_id',
    ];

    protected $casts = [
        'option_id' => 'integer',
        'sort_order' => 'integer',
        'dublicate_attribute_id' => 'integer',
    ];
}
