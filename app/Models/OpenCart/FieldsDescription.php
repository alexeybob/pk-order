<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_fields_description', connection: 'opencart', incrementing: false, timestamps: false)]
class FieldsDescription extends OpenCartModel
{
    protected $fillable = [
        'field_id',
        'language_id',
        'field_description',
        'field_error',
        'field_value',
        'field',
    ];

    protected $casts = [
        'field_id' => 'integer',
        'language_id' => 'integer',
    ];
}
