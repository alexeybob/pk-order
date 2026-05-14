<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_schedule_delay', connection: 'opencart', incrementing: false, timestamps: false)]
class CdekOrderScheduleDelay extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'attempt_id',
        'delay_id',
        'description',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'attempt_id' => 'integer',
        'delay_id' => 'integer',
    ];
}
