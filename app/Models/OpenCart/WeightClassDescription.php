<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_weight_class_description', connection: 'opencart', primaryKey: 'weight_class_id', incrementing: true, timestamps: false)]
class WeightClassDescription extends OpenCartModel
{
    protected $fillable = [
        'weight_class_id',
        'language_id',
        'title',
        'unit',
    ];

    protected $casts = [
        'weight_class_id' => 'integer',
        'language_id' => 'integer',
    ];
}
