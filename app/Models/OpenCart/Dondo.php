<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_dondo', connection: 'opencart', primaryKey: 'order_id', incrementing: true, timestamps: false)]
class Dondo extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'contact',
        'date_added',
    ];

    protected $casts = [
        'order_id' => 'integer',
    ];
}
