<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_country', connection: 'opencart', primaryKey: 'country_id', incrementing: true, timestamps: false)]
class Country extends OpenCartModel
{
    protected $fillable = [
        'country_id',
        'name',
        'iso_code_2',
        'iso_code_3',
        'address_format',
        'postcode_required',
        'status',
    ];

    protected $casts = [
        'country_id' => 'integer',
        'postcode_required' => 'boolean',
        'status' => 'boolean',
    ];
}
