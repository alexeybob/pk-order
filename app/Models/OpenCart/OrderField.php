<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_field', connection: 'opencart', primaryKey: 'order_id', incrementing: false, timestamps: false)]
class OrderField extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'custom_field_id',
        'custom_field_value_id',
        'name',
        'value',
        'sort_order',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'custom_field_id' => 'integer',
        'custom_field_value_id' => 'integer',
        'name' => 'integer',
        'sort_order' => 'integer',
    ];
}
