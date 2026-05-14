<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_honestsign_attribute_general', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class HonestsignAttributeGeneral extends OpenCartModel
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
