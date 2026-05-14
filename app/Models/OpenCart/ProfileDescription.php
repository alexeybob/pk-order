<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_profile_description', connection: 'opencart', primaryKey: 'profile_id', incrementing: false, timestamps: false)]
class ProfileDescription extends OpenCartModel
{
    protected $fillable = [
        'profile_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'profile_id' => 'integer',
        'language_id' => 'integer',
    ];
}
