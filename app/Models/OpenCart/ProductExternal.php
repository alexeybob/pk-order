<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_external', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductExternal extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'hash',
        'external_link',
    ];

    protected $casts = [
        'product_id' => 'integer',
    ];
}
