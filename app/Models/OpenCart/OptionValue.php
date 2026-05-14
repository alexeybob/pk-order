<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_option_value', connection: 'opencart', primaryKey: 'option_value_id', incrementing: true, timestamps: false)]
class OptionValue extends OpenCartModel
{
    protected $fillable = [
        'option_value_id',
        'option_id',
        'image',
        'sort_order',
        'color_code',
    ];

    protected $casts = [
        'option_value_id' => 'integer',
        'option_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
