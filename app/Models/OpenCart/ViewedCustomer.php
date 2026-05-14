<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_viewed_customer', connection: 'opencart', incrementing: false, timestamps: false)]
class ViewedCustomer extends OpenCartModel
{
    protected $fillable = [
        'customer_id',
        'date_start',
        'date_next',
    ];

    protected $casts = [
        'customer_id' => 'integer',
    ];
}
