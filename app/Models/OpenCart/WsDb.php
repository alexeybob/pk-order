<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('ws_db', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WsDb extends OpenCartModel
{
    protected $fillable = [
        'id',
        'name',
        'pass',
        'lang',
        'ctime',
        'apitoken',
        'isalias',
        'prefix',
        'sqlimport',
    ];

    protected $casts = [
        'id' => 'integer',
        'isalias' => 'integer',
        'sqlimport' => 'integer',
    ];
}
