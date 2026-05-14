<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_address', connection: 'opencart', primaryKey: 'address_id', incrementing: true, timestamps: false)]
class Address extends OpenCartModel
{
    protected $fillable = [
        'address_id',
        'customer_id',
        'firstname',
        'lastname',
        'company',
        'company_id',
        'tax_id',
        'address_1',
        'address_2',
        'city',
        'postcode',
        'country_id',
        'zone_id',
    ];

    protected $casts = [
        'address_id' => 'integer',
        'customer_id' => 'integer',
        'country_id' => 'integer',
        'zone_id' => 'integer',
    ];
}
