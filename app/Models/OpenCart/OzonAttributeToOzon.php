<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_attribute_to_ozon', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class OzonAttributeToOzon extends OpenCartModel
{
    protected $fillable = [
        'id',
        'category_id',
        'ozon_attribute_id',
        'to_field',
        'custom',
        'custom_ozon',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'ozon_attribute_id' => 'integer',
    ];
}
