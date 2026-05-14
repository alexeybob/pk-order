<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_call_history_fail', connection: 'opencart', incrementing: false, timestamps: false)]
class CdekOrderCallHistoryFail extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'fail_id',
        'date',
        'description',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'fail_id' => 'integer',
        'date' => 'integer',
    ];
}
