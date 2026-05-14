<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_viewed_product', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ViewedProduct extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'customer_id',
        'date_modification',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'customer_id' => 'integer',
    ];
}
