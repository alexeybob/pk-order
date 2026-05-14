<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_weight_class', connection: 'opencart', primaryKey: 'weight_class_id', incrementing: true, timestamps: false)]
class WeightClass extends OpenCartModel
{
    protected $fillable = [
        'weight_class_id',
        'value',
    ];

    protected $casts = [
        'weight_class_id' => 'integer',
        'value' => 'float',
    ];
}
