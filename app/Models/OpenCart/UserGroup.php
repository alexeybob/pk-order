<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_user_group', connection: 'opencart', primaryKey: 'user_group_id', incrementing: true, timestamps: false)]
class UserGroup extends OpenCartModel
{
    protected $fillable = [
        'user_group_id',
        'name',
        'permission',
    ];

    protected $casts = [
        'user_group_id' => 'integer',
    ];
}
