<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_city', connection: 'opencart', primaryKey: 'id', incrementing: false, timestamps: false)]
class CdekCity extends OpenCartModel
{
    protected $fillable = [
        'id',
        'name',
        'cityName',
        'regionName',
        'center',
        'cache_limit',
    ];

    protected $casts = [
        'center' => 'boolean',
        'cache_limit' => 'float',
    ];
}
