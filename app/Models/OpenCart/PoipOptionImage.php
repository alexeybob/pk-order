<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_poip_option_image', connection: 'opencart', incrementing: false, timestamps: false)]
class PoipOptionImage extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'product_option_id',
        'product_option_value_id',
        'image',
        'sort_order',
        'main',
        'full',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'product_option_id' => 'integer',
        'product_option_value_id' => 'integer',
        'sort_order' => 'integer',
        'main' => 'integer',
        'full' => 'integer',
    ];
}
