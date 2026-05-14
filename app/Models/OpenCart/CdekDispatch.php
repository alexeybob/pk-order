<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_dispatch', connection: 'opencart', primaryKey: 'dispatch_id', incrementing: true, timestamps: false)]
class CdekDispatch extends OpenCartModel
{
    protected $fillable = [
        'dispatch_id',
        'dispatch_number',
        'date',
        'server_date',
    ];

    protected $casts = [
        'dispatch_id' => 'integer',
    ];
}
