<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_manufacturer', connection: 'opencart', primaryKey: 'manufacturer_id', incrementing: true, timestamps: false)]
class Manufacturer extends OpenCartModel
{
    protected $fillable = [
        'manufacturer_id',
        'name',
        'image',
        'logo',
        'info',
        'sort_order',
    ];

    protected $casts = [
        'manufacturer_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
