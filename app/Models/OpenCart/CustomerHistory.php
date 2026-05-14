<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_history', connection: 'opencart', primaryKey: 'customer_history_id', incrementing: true, timestamps: false)]
class CustomerHistory extends OpenCartModel
{
    protected $fillable = [
        'customer_history_id',
        'customer_id',
        'comment',
        'date_added',
    ];

    protected $casts = [
        'customer_history_id' => 'integer',
        'customer_id' => 'integer',
    ];
}
