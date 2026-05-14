<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('zo_tmp', connection: 'opencart', incrementing: false, timestamps: false)]
class ZoTmp extends OpenCartModel
{
    protected $fillable = [
        'model',
        'sku',
    ];
}
