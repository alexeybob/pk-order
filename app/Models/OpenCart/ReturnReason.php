<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_return_reason', connection: 'opencart', primaryKey: 'return_reason_id', incrementing: true, timestamps: false)]
class ReturnReason extends OpenCartModel
{
    protected $fillable = [
        'return_reason_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'return_reason_id' => 'integer',
        'language_id' => 'integer',
    ];
}
