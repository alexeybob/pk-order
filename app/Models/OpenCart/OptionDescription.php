<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_option_description', connection: 'opencart', primaryKey: 'option_id', incrementing: false, timestamps: false)]
class OptionDescription extends OpenCartModel
{
    protected $fillable = [
        'option_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'option_id' => 'integer',
        'language_id' => 'integer',
    ];
}
