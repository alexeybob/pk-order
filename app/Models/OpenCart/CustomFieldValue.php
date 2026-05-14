<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_custom_field_value', connection: 'opencart', primaryKey: 'custom_field_value_id', incrementing: true, timestamps: false)]
class CustomFieldValue extends OpenCartModel
{
    protected $fillable = [
        'custom_field_value_id',
        'custom_field_id',
        'sort_order',
    ];

    protected $casts = [
        'custom_field_value_id' => 'integer',
        'custom_field_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
