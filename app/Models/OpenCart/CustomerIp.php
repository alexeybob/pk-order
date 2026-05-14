<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_ip', connection: 'opencart', primaryKey: 'customer_ip_id', incrementing: true, timestamps: false)]
class CustomerIp extends OpenCartModel
{
    protected $fillable = [
        'customer_ip_id',
        'customer_id',
        'ip',
        'date_added',
    ];

    protected $casts = [
        'customer_ip_id' => 'integer',
        'customer_id' => 'integer',
    ];
}
