<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('ws_task', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WsTask extends OpenCartModel
{
    protected $fillable = [
        'id',
        'start',
        'finish',
        'closed',
        'ext',
        'hash',
        'ignext',
        'ignpath',
        'limit',
        'lastrun',
    ];

    protected $casts = [
        'id' => 'integer',
        'closed' => 'integer',
        'hash' => 'integer',
        'limit' => 'integer',
    ];
}
