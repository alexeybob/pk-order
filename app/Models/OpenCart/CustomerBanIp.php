<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_ban_ip', connection: 'opencart', primaryKey: 'customer_ban_ip_id', incrementing: true, timestamps: false)]
class CustomerBanIp extends OpenCartModel
{
    protected $fillable = [
        'customer_ban_ip_id',
        'ip',
    ];

    protected $casts = [
        'customer_ban_ip_id' => 'integer',
    ];
}
