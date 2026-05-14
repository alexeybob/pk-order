<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_reward', connection: 'opencart', primaryKey: 'customer_reward_id', incrementing: true, timestamps: false)]
class CustomerReward extends OpenCartModel
{
    protected $fillable = [
        'customer_reward_id',
        'customer_id',
        'order_id',
        'description',
        'points',
        'date_added',
    ];

    protected $casts = [
        'customer_reward_id' => 'integer',
        'customer_id' => 'integer',
        'order_id' => 'integer',
        'points' => 'integer',
    ];
}
