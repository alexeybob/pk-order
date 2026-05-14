<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('ws_users', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WsUser extends OpenCartModel
{
    protected $fillable = [
        'id',
        'login',
        'pass',
        'email',
        'idgroup',
        'name',
        'lang',
        'ctime',
        'uptime',
    ];

    protected $casts = [
        'id' => 'integer',
        'idgroup' => 'integer',
    ];
}
