<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_call_history_good', connection: 'opencart', incrementing: false, timestamps: false)]
class CdekOrderCallHistoryGood extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'date',
        'date_deliv',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'date' => 'integer',
        'date_deliv' => 'integer',
    ];
}
