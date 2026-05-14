<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_option_value_description', connection: 'opencart', primaryKey: 'ozon_value_id', incrementing: false, timestamps: false)]
class OzonOptionValueDescription extends OpenCartModel
{
    protected $fillable = [
        'ozon_attribute_id',
        'ozon_value_id',
        'ozon_value',
    ];

    protected $casts = [
        'ozon_attribute_id' => 'integer',
        'ozon_value_id' => 'integer',
    ];
}
