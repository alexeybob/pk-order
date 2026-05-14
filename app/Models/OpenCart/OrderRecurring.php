<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_recurring', connection: 'opencart', primaryKey: 'order_recurring_id', incrementing: true, timestamps: false)]
class OrderRecurring extends OpenCartModel
{
    protected $fillable = [
        'order_recurring_id',
        'order_id',
        'created',
        'status',
        'product_id',
        'product_name',
        'product_quantity',
        'profile_id',
        'profile_name',
        'profile_description',
        'recurring_frequency',
        'recurring_cycle',
        'recurring_duration',
        'recurring_price',
        'trial',
        'trial_frequency',
        'trial_cycle',
        'trial_duration',
        'trial_price',
        'profile_reference',
    ];

    protected $casts = [
        'order_recurring_id' => 'integer',
        'order_id' => 'integer',
        'status' => 'integer',
        'product_id' => 'integer',
        'product_quantity' => 'integer',
        'profile_id' => 'integer',
        'recurring_cycle' => 'integer',
        'recurring_duration' => 'integer',
        'recurring_price' => 'float',
        'trial' => 'boolean',
        'trial_cycle' => 'integer',
        'trial_duration' => 'integer',
        'trial_price' => 'float',
    ];
}
