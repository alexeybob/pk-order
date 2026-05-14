<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_address_simple_fields', connection: 'opencart', primaryKey: 'address_id', incrementing: false, timestamps: false)]
class AddressSimpleField extends OpenCartModel
{
    protected $fillable = [
        'address_id',
        'metadata',
    ];

    protected $casts = [
        'address_id' => 'integer',
    ];
}
