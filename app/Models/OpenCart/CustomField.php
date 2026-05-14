<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_custom_field', connection: 'opencart', primaryKey: 'custom_field_id', incrementing: true, timestamps: false)]
class CustomField extends OpenCartModel
{
    protected $fillable = [
        'custom_field_id',
        'type',
        'value',
        'required',
        'location',
        'position',
        'sort_order',
    ];

    protected $casts = [
        'custom_field_id' => 'integer',
        'required' => 'boolean',
        'position' => 'integer',
        'sort_order' => 'integer',
    ];
}
