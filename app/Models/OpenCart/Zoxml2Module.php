<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zoxml2_module', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Zoxml2Module extends OpenCartModel
{
    protected $fillable = [
        'id',
        'key',
        'data',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
