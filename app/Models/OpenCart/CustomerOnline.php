<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_online', connection: 'opencart', primaryKey: 'ip', incrementing: false, timestamps: false)]
class CustomerOnline extends OpenCartModel
{
    protected $fillable = [
        'ip',
        'customer_id',
        'url',
        'referer',
        'date_added',
    ];

    protected $casts = [
        'customer_id' => 'integer',
    ];
}
