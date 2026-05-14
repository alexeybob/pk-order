<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zoxml2_options', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Zoxml2Option extends OpenCartModel
{
    protected $fillable = [
        'id',
        'session_key',
        'data',
        'name',
        'dest_type',
        'dest_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'dest_id' => 'integer',
    ];
}
