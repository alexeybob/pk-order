<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('maxmind_geo_country', connection: 'opencart', primaryKey: 'start', incrementing: false, timestamps: false)]
class MaxmindGeoCountry extends OpenCartModel
{
    protected $fillable = [
        'start',
        'end',
        'iso_code_2',
    ];

    protected $casts = [
        'start' => 'integer',
        'end' => 'integer',
    ];
}
