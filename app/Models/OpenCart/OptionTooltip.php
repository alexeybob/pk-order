<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_option_tooltip', connection: 'opencart', primaryKey: 'option_id', incrementing: false, timestamps: false)]
class OptionTooltip extends OpenCartModel
{
    protected $fillable = [
        'option_id',
        'language_id',
        'tooltip',
    ];

    protected $casts = [
        'option_id' => 'integer',
        'language_id' => 'integer',
    ];
}
