<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_image', connection: 'opencart', primaryKey: 'product_image_id', incrementing: true, timestamps: false)]
class ProductImage extends OpenCartModel
{
    protected $fillable = [
        'product_image_id',
        'product_id',
        'image',
        'sort_order',
    ];

    protected $casts = [
        'product_image_id' => 'integer',
        'product_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
