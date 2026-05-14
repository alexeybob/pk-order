<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_call', connection: 'opencart', primaryKey: 'call_id', incrementing: true, timestamps: false)]
class CdekOrderCall extends OpenCartModel
{
    protected $fillable = [
        'call_id',
        'order_id',
        'date',
        'time_beg',
        'time_end',
        'phone',
        'recipient_name',
        'delivery_recipient_cost',
        'address_street',
        'address_house',
        'address_flat',
        'comment',
    ];

    protected $casts = [
        'call_id' => 'integer',
        'order_id' => 'integer',
        'date' => 'integer',
        'delivery_recipient_cost' => 'float',
    ];
}
