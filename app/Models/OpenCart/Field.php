<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_fields', connection: 'opencart', primaryKey: 'field_id', incrementing: true, timestamps: false)]
class Field extends OpenCartModel
{
    protected $fillable = [
        'field_id',
        'field_name',
        'field_image',
        'field_type',
        'field_must',
        'field_order',
        'field_status',
        'field_public',
    ];

    protected $casts = [
        'field_id' => 'integer',
        'field_must' => 'boolean',
        'field_order' => 'integer',
        'field_status' => 'boolean',
        'field_public' => 'boolean',
    ];
}
