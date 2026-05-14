<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_seogen_profile', connection: 'opencart', primaryKey: 'profile_id', incrementing: true, timestamps: false)]
class SeogenProfile extends OpenCartModel
{
    protected $fillable = [
        'profile_id',
        'name',
        'data',
    ];

    protected $casts = [
        'profile_id' => 'integer',
    ];
}
