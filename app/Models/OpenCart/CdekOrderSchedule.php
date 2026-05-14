<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_schedule', connection: 'opencart', primaryKey: 'attempt_id', incrementing: false, timestamps: false)]
class CdekOrderSchedule extends OpenCartModel
{
    protected $fillable = [
        'attempt_id',
        'order_id',
        'date',
        'time_beg',
        'time_end',
        'phone',
        'recipient_name',
        'address_street',
        'address_house',
        'address_flat',
        'address_pvz_code',
        'comment',
    ];

    protected $casts = [
        'attempt_id' => 'integer',
        'order_id' => 'integer',
        'date' => 'integer',
    ];
}
