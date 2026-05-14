<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_nitro_product_cache', connection: 'opencart', incrementing: false, timestamps: false)]
class NitroProductCache extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'cachefile',
        'expires',
    ];

    protected $casts = [
        'product_id' => 'integer',
    ];
}
