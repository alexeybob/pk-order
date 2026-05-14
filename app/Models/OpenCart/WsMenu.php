<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('ws_menu', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WsMenu extends OpenCartModel
{
    protected $fillable = [
        'id',
        'title',
        'idowner',
        'sort',
        'url',
        'hint',
        'idparent',
        'isfolder',
    ];

    protected $casts = [
        'id' => 'integer',
        'idowner' => 'integer',
        'sort' => 'integer',
        'idparent' => 'integer',
        'isfolder' => 'integer',
    ];
}
