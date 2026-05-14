<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_return_status', connection: 'opencart', primaryKey: 'return_status_id', incrementing: true, timestamps: false)]
class ReturnStatus extends OpenCartModel
{
    protected $fillable = [
        'return_status_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'return_status_id' => 'integer',
        'language_id' => 'integer',
    ];
}
