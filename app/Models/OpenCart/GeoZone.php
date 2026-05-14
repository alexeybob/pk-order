<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_geo_zone', connection: 'opencart', primaryKey: 'geo_zone_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class GeoZone extends OpenCartModel
{
    protected $fillable = [
        'geo_zone_id',
        'name',
        'description',
        'date_modified',
        'date_added',
    ];

    protected $casts = [
        'geo_zone_id' => 'integer',
    ];
}
