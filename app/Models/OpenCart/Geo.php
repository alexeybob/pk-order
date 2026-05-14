<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_geo', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Geo extends OpenCartModel
{
    protected $fillable = [
        'id',
        'zone_id',
        'name',
        'full_name',
        'postcode',
        'parent_id',
        'lat',
        'long',
        'population',
    ];

    protected $casts = [
        'id' => 'integer',
        'zone_id' => 'integer',
        'parent_id' => 'integer',
        'long' => 'float',
    ];
}
