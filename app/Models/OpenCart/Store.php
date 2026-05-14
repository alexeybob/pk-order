<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_store', connection: 'opencart', primaryKey: 'store_id', incrementing: true, timestamps: false)]
class Store extends OpenCartModel
{
    protected $fillable = [
        'store_id',
        'name',
        'url',
        'ssl',
    ];

    protected $casts = [
        'store_id' => 'integer',
    ];
}
