<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order_courier', connection: 'opencart', primaryKey: 'courier_id', incrementing: true, timestamps: false)]
class CdekOrderCourier extends OpenCartModel
{
    protected $fillable = [
        'courier_id',
        'order_id',
        'date',
        'time_beg',
        'time_end',
        'lunch_beg',
        'lunch_end',
        'city_id',
        'city_name',
        'send_phone',
        'sender_name',
        'address_street',
        'address_house',
        'address_flat',
        'comment',
    ];

    protected $casts = [
        'courier_id' => 'integer',
        'order_id' => 'integer',
        'date' => 'integer',
        'city_id' => 'integer',
    ];
}
