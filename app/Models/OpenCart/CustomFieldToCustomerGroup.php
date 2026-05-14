<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_custom_field_to_customer_group', connection: 'opencart', primaryKey: 'custom_field_id', incrementing: false, timestamps: false)]
class CustomFieldToCustomerGroup extends OpenCartModel
{
    protected $fillable = [
        'custom_field_id',
        'customer_group_id',
    ];

    protected $casts = [
        'custom_field_id' => 'integer',
        'customer_group_id' => 'integer',
    ];
}
