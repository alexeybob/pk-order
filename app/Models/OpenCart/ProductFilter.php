<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_filter', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductFilter extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'filter_id',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'filter_id' => 'integer',
    ];
}
