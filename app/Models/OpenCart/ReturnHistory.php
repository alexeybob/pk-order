<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_return_history', connection: 'opencart', primaryKey: 'return_history_id', incrementing: true, timestamps: false)]
class ReturnHistory extends OpenCartModel
{
    protected $fillable = [
        'return_history_id',
        'return_id',
        'return_status_id',
        'notify',
        'comment',
        'date_added',
    ];

    protected $casts = [
        'return_history_id' => 'integer',
        'return_id' => 'integer',
        'return_status_id' => 'integer',
        'notify' => 'boolean',
    ];
}
