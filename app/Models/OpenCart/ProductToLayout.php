<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_to_layout', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductToLayout extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'store_id',
        'layout_id',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'store_id' => 'integer',
        'layout_id' => 'integer',
    ];
}
