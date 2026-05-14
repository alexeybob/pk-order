<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_manufacturer', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class OzonManufacturer extends OpenCartModel
{
    protected $fillable = [
        'id',
        'name',
        'picture',
        'info',
        'date_added',
        'date_modification',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
