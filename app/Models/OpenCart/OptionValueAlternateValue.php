<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_option_value_alternate_value', connection: 'opencart', primaryKey: 'unique_id', incrementing: true, timestamps: false)]
class OptionValueAlternateValue extends OpenCartModel
{
    protected $fillable = [
        'unique_id',
        'option_value_id',
        'alternate_value_id',
        'manufacturer_id',
        'option_id',
    ];

    protected $casts = [
        'unique_id' => 'integer',
        'option_value_id' => 'integer',
        'alternate_value_id' => 'integer',
        'manufacturer_id' => 'integer',
        'option_id' => 'integer',
    ];
}
