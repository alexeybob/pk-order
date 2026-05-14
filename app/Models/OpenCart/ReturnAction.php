<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_return_action', connection: 'opencart', primaryKey: 'return_action_id', incrementing: true, timestamps: false)]
class ReturnAction extends OpenCartModel
{
    protected $fillable = [
        'return_action_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'return_action_id' => 'integer',
        'language_id' => 'integer',
    ];
}
