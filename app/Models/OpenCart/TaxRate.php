<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_tax_rate', connection: 'opencart', primaryKey: 'tax_rate_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class TaxRate extends OpenCartModel
{
    protected $fillable = [
        'tax_rate_id',
        'geo_zone_id',
        'name',
        'rate',
        'type',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'tax_rate_id' => 'integer',
        'geo_zone_id' => 'integer',
        'rate' => 'float',
    ];
}
