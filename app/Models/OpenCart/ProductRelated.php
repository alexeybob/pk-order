<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_related', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductRelated extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'related_id',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'related_id' => 'integer',
    ];
}
