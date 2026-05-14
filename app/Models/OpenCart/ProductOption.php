<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_option', connection: 'opencart', primaryKey: 'product_option_id', incrementing: true, timestamps: false)]
class ProductOption extends OpenCartModel
{
    protected $fillable = [
        'product_option_id',
        'product_id',
        'option_id',
        'option_value',
        'required',
    ];

    protected $casts = [
        'product_option_id' => 'integer',
        'product_id' => 'integer',
        'option_id' => 'integer',
        'required' => 'boolean',
    ];
}
