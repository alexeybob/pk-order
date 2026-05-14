<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_option_value', connection: 'opencart', primaryKey: 'product_option_value_id', incrementing: true, timestamps: false)]
class ProductOptionValue extends OpenCartModel
{
    protected $fillable = [
        'product_option_value_id',
        'product_option_id',
        'product_id',
        'option_id',
        'option_value_id',
        'quantity',
        'subtract',
        'price',
        'price_prefix',
        'points',
        'points_prefix',
        'weight',
        'weight_prefix',
        'optsku',
    ];

    protected $casts = [
        'product_option_value_id' => 'integer',
        'product_option_id' => 'integer',
        'product_id' => 'integer',
        'option_id' => 'integer',
        'option_value_id' => 'integer',
        'quantity' => 'integer',
        'subtract' => 'boolean',
        'price' => 'float',
        'points' => 'integer',
        'weight' => 'float',
    ];
}
