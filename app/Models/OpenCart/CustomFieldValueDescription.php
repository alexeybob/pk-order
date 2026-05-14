<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_custom_field_value_description', connection: 'opencart', primaryKey: 'custom_field_value_id', incrementing: false, timestamps: false)]
class CustomFieldValueDescription extends OpenCartModel
{
    protected $fillable = [
        'custom_field_value_id',
        'language_id',
        'custom_field_id',
        'name',
    ];

    protected $casts = [
        'custom_field_value_id' => 'integer',
        'language_id' => 'integer',
        'custom_field_id' => 'integer',
    ];
}
