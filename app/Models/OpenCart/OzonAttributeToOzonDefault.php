<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_attribute_to_ozon_default', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class OzonAttributeToOzonDefault extends OpenCartModel
{
    protected $fillable = [
        'id',
        'ozon_attribute_id',
        'to_field',
    ];

    protected $casts = [
        'id' => 'integer',
        'ozon_attribute_id' => 'integer',
    ];
}
