<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_call_history_delay', connection: 'opencart', incrementing: false, timestamps: false)]
class CdekOrderCallHistoryDelay extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'date',
        'date_next',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'date' => 'integer',
        'date_next' => 'integer',
    ];
}
