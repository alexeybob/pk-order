<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_profile', connection: 'opencart', primaryKey: 'profile_id', incrementing: true, timestamps: false)]
class Profile extends OpenCartModel
{
    protected $fillable = [
        'profile_id',
        'sort_order',
        'status',
        'price',
        'frequency',
        'duration',
        'cycle',
        'trial_status',
        'trial_price',
        'trial_frequency',
        'trial_duration',
        'trial_cycle',
    ];

    protected $casts = [
        'profile_id' => 'integer',
        'sort_order' => 'integer',
        'status' => 'integer',
        'price' => 'float',
        'duration' => 'integer',
        'cycle' => 'integer',
        'trial_status' => 'integer',
        'trial_price' => 'float',
        'trial_duration' => 'integer',
        'trial_cycle' => 'integer',
    ];
}
