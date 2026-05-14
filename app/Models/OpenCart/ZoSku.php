<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('zo_sku', connection: 'opencart', incrementing: false, timestamps: false)]
class ZoSku extends OpenCartModel
{
    protected $fillable = [
        'sku',
    ];
}
