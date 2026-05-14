<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zone', connection: 'opencart', primaryKey: 'zone_id', incrementing: true, timestamps: false)]
class Zone extends OpenCartModel
{
    protected $fillable = [
        'zone_id',
        'country_id',
        'name',
        'code',
        'status',
    ];

    protected $casts = [
        'zone_id' => 'integer',
        'country_id' => 'integer',
        'status' => 'boolean',
    ];
}
