<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zoxml2_log', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Zoxml2Log extends OpenCartModel
{
    protected $fillable = [
        'id',
        'session_key',
        'data',
        'type',
        'time',
        'user',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
