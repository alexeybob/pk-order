<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_length_class', connection: 'opencart', primaryKey: 'length_class_id', incrementing: true, timestamps: false)]
class LengthClass extends OpenCartModel
{
    protected $fillable = [
        'length_class_id',
        'value',
    ];

    protected $casts = [
        'length_class_id' => 'integer',
        'value' => 'float',
    ];
}
