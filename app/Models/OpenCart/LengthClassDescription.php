<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_length_class_description', connection: 'opencart', primaryKey: 'length_class_id', incrementing: true, timestamps: false)]
class LengthClassDescription extends OpenCartModel
{
    protected $fillable = [
        'length_class_id',
        'language_id',
        'title',
        'unit',
    ];

    protected $casts = [
        'length_class_id' => 'integer',
        'language_id' => 'integer',
    ];
}
