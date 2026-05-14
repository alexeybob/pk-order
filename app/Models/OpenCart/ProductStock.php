<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_stocks', connection: 'opencart', incrementing: false, timestamps: false)]
class ProductStock extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_id',
        'product_id',
        'price',
        'quantity',
        'flag',
    ];

    protected $casts = [
        'relatedoptions_id' => 'integer',
        'product_id' => 'integer',
        'price' => 'float',
        'quantity' => 'integer',
        'flag' => 'integer',
    ];
}
