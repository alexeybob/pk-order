<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zoxml2_events', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Zoxml2Event extends OpenCartModel
{
    protected $fillable = [
        'id',
        'session_key',
        'data',
        'type',
        'time',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
