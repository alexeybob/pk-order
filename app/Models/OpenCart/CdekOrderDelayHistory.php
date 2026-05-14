<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_delay_history', connection: 'opencart', incrementing: false, timestamps: false)]
class CdekOrderDelayHistory extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'delay_id',
        'date',
        'description',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'delay_id' => 'integer',
        'date' => 'integer',
    ];
}
