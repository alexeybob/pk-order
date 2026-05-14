<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppliers', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Supplier extends OpenCartModel
{
    protected $fillable = [
        'id',
        's_key',
        'value',
        'prefix',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
