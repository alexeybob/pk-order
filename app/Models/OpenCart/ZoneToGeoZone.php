<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zone_to_geo_zone', connection: 'opencart', primaryKey: 'zone_to_geo_zone_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class ZoneToGeoZone extends OpenCartModel
{
    protected $fillable = [
        'zone_to_geo_zone_id',
        'country_id',
        'zone_id',
        'geo_zone_id',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'zone_to_geo_zone_id' => 'integer',
        'country_id' => 'integer',
        'zone_id' => 'integer',
        'geo_zone_id' => 'integer',
    ];
}
