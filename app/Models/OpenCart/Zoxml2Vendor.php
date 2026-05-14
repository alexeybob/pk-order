<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zoxml2_vendors', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Zoxml2Vendor extends OpenCartModel
{
    protected $fillable = [
        'id',
        'session_key',
        'name',
        'manufacturer_id',
        'total',
        'margin',
    ];

    protected $casts = [
        'id' => 'integer',
        'manufacturer_id' => 'integer',
        'total' => 'integer',
    ];
}
