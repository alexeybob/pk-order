<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('ws_app', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WsApp extends OpenCartModel
{
    protected $fillable = [
        'id',
        'name',
        'value',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
