<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_key', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Key extends OpenCartModel
{
    protected $fillable = [
        'id',
        'value',
        'main_key',
        'license_key',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
