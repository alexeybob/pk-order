<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_custom_field_description', connection: 'opencart', primaryKey: 'custom_field_id', incrementing: false, timestamps: false)]
class CustomFieldDescription extends OpenCartModel
{
    protected $fillable = [
        'custom_field_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'custom_field_id' => 'integer',
        'language_id' => 'integer',
    ];
}
