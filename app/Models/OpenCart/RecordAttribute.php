<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_attribute', connection: 'opencart', primaryKey: 'record_id', incrementing: false, timestamps: false)]
class RecordAttribute extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'attribute_id',
        'language_id',
        'text',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'attribute_id' => 'integer',
        'language_id' => 'integer',
    ];
}
