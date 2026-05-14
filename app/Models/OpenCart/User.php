<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_user', connection: 'opencart', primaryKey: 'user_id', incrementing: true, timestamps: false)]
class User extends OpenCartModel
{
    protected $fillable = [
        'user_id',
        'user_group_id',
        'username',
        'password',
        'salt',
        'firstname',
        'lastname',
        'email',
        'code',
        'ip',
        'status',
        'date_added',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'user_group_id' => 'integer',
        'status' => 'boolean',
    ];
}
