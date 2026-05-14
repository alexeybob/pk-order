<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_status_history', connection: 'opencart', incrementing: false, timestamps: false)]
class CdekOrderStatusHistory extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'status_id',
        'description',
        'date',
        'city_id',
        'city_name',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'status_id' => 'integer',
        'date' => 'integer',
        'city_id' => 'integer',
    ];
}
