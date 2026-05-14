<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_total', connection: 'opencart', primaryKey: 'order_total_id', incrementing: true, timestamps: false)]
class OrderTotal extends OpenCartModel
{
    protected $fillable = [
        'order_total_id',
        'order_id',
        'code',
        'title',
        'text',
        'value',
        'sort_order',
    ];

    protected $casts = [
        'order_total_id' => 'integer',
        'order_id' => 'integer',
        'value' => 'float',
        'sort_order' => 'integer',
    ];
}
