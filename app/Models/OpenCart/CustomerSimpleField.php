<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_simple_fields', connection: 'opencart', primaryKey: 'customer_id', incrementing: false, timestamps: false)]
class CustomerSimpleField extends OpenCartModel
{
    protected $fillable = [
        'customer_id',
        'metadata',
    ];

    protected $casts = [
        'customer_id' => 'integer',
    ];
}
