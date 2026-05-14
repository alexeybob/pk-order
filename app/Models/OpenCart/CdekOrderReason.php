<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_reason', connection: 'opencart', primaryKey: 'reason_id', incrementing: true, timestamps: false)]
class CdekOrderReason extends OpenCartModel
{
    protected $fillable = [
        'reason_id',
        'order_id',
        'date',
        'description',
    ];

    protected $casts = [
        'reason_id' => 'integer',
        'order_id' => 'integer',
        'date' => 'integer',
    ];
}
