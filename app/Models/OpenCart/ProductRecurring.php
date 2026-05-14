<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_recurring', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductRecurring extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'store_id',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'store_id' => 'integer',
    ];
}
