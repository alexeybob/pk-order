<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zoxml2_suppliers', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Zoxml2Supplier extends OpenCartModel
{
    protected $fillable = [
        'id',
        'session_key',
        'data',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
