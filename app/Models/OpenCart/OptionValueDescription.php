<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_option_value_description', connection: 'opencart', primaryKey: 'option_value_id', incrementing: false, timestamps: false)]
class OptionValueDescription extends OpenCartModel
{
    protected $fillable = [
        'option_value_id',
        'language_id',
        'option_id',
        'name',
    ];

    protected $casts = [
        'option_value_id' => 'integer',
        'language_id' => 'integer',
        'option_id' => 'integer',
    ];
}
