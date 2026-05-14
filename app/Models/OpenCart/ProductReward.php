<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_reward', connection: 'opencart', primaryKey: 'product_reward_id', incrementing: true, timestamps: false)]
class ProductReward extends OpenCartModel
{
    protected $fillable = [
        'product_reward_id',
        'product_id',
        'customer_group_id',
        'points',
    ];

    protected $casts = [
        'product_reward_id' => 'integer',
        'product_id' => 'integer',
        'customer_group_id' => 'integer',
        'points' => 'integer',
    ];
}
