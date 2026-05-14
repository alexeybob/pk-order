<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_my_warehouse_manager', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class MyWarehouseManager extends OpenCartModel
{
    protected $fillable = [
        'id',
        'id_manager',
        'name',
        'data',
        'quantity',
        'order_id',
        'meta',
        'created_at',
        'updated_at',
        'relatedoptions_id',
        'manager_actions',
        'action_code',
    ];

    protected $casts = [
        'id' => 'integer',
        'id_manager' => 'integer',
        'quantity' => 'integer',
        'order_id' => 'integer',
        'relatedoptions_id' => 'integer',
    ];
}
