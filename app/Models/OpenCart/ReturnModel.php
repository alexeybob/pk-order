<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_return', connection: 'opencart', primaryKey: 'return_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class ReturnModel extends OpenCartModel
{
    protected $fillable = [
        'return_id',
        'order_id',
        'product_id',
        'customer_id',
        'firstname',
        'lastname',
        'email',
        'telephone',
        'product',
        'model',
        'quantity',
        'opened',
        'return_reason_id',
        'return_action_id',
        'return_status_id',
        'comment',
        'date_ordered',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'return_id' => 'integer',
        'order_id' => 'integer',
        'product_id' => 'integer',
        'customer_id' => 'integer',
        'quantity' => 'integer',
        'opened' => 'boolean',
        'return_reason_id' => 'integer',
        'return_action_id' => 'integer',
        'return_status_id' => 'integer',
    ];
}
