<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_manufacturer_to_store', connection: 'opencart', primaryKey: 'manufacturer_id', incrementing: false, timestamps: false)]
class ManufacturerToStore extends OpenCartModel
{
    protected $fillable = [
        'manufacturer_id',
        'store_id',
    ];

    protected $casts = [
        'manufacturer_id' => 'integer',
        'store_id' => 'integer',
    ];
}
