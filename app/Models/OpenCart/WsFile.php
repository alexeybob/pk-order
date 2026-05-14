<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('ws_files', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WsFile extends OpenCartModel
{
    protected $fillable = [
        'id',
        'idowner',
        'name',
        'perm',
        'time',
        'size',
        'hash',
        'idtask',
        'isfolder',
        'nperm',
        'ntime',
        'nsize',
        'nhash',
        'status',
        'uptime',
        'nuptime',
    ];

    protected $casts = [
        'id' => 'integer',
        'idowner' => 'integer',
        'perm' => 'integer',
        'time' => 'integer',
        'size' => 'integer',
        'idtask' => 'integer',
        'isfolder' => 'integer',
        'nperm' => 'integer',
        'ntime' => 'integer',
        'nsize' => 'integer',
        'status' => 'integer',
    ];
}
