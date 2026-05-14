<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_extension', connection: 'opencart', primaryKey: 'extension_id', incrementing: true, timestamps: false)]
class Extension extends OpenCartModel
{
    protected $fillable = [
        'extension_id',
        'type',
        'code',
    ];

    protected $casts = [
        'extension_id' => 'integer',
    ];
}
