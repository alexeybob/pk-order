<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_geo_ip', connection: 'opencart', primaryKey: 'start', incrementing: false, timestamps: false)]
class GeoIp extends OpenCartModel
{
    protected $fillable = [
        'start',
        'end',
        'geo_id',
    ];

    protected $casts = [
        'start' => 'integer',
        'end' => 'integer',
        'geo_id' => 'integer',
    ];
}
