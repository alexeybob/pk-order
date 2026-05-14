<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_simple_fields', connection: 'opencart', primaryKey: 'order_id', incrementing: false, timestamps: false)]
class OrderSimpleField extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'metadata',
        'stoimost',
    ];

    protected $casts = [
        'order_id' => 'integer',
    ];
}
