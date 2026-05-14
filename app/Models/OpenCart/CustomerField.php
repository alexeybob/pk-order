<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_field', connection: 'opencart', primaryKey: 'customer_id', incrementing: false, timestamps: false)]
class CustomerField extends OpenCartModel
{
    protected $fillable = [
        'customer_id',
        'custom_field_id',
        'custom_field_value_id',
        'name',
        'value',
        'sort_order',
    ];

    protected $casts = [
        'customer_id' => 'integer',
        'custom_field_id' => 'integer',
        'custom_field_value_id' => 'integer',
        'name' => 'integer',
        'sort_order' => 'integer',
    ];
}
