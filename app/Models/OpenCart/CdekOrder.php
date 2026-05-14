<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_cdek_order', connection: 'opencart', primaryKey: 'order_id', incrementing: false, timestamps: false)]
class CdekOrder extends OpenCartModel
{
    protected $fillable = [
        'order_id',
        'dispatch_id',
        'act_number',
        'dispatch_number',
        'return_dispatch_number',
        'city_id',
        'city_name',
        'city_postcode',
        'recipient_city_id',
        'recipient_city_name',
        'recipient_city_postcode',
        'recipient_name',
        'recipient_email',
        'phone',
        'tariff_id',
        'mode_id',
        'status_id',
        'reason_id',
        'delay_id',
        'delivery_recipient_cost',
        'cod',
        'cod_fact',
        'comment',
        'seller_name',
        'address_street',
        'address_house',
        'address_flat',
        'address_pvz_code',
        'delivery_cost',
        'delivery_last_change',
        'delivery_date',
        'delivery_recipient_name',
        'currency',
        'currency_cod',
        'last_exchange',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'dispatch_id' => 'integer',
        'city_id' => 'integer',
        'city_postcode' => 'integer',
        'recipient_city_id' => 'integer',
        'recipient_city_postcode' => 'integer',
        'tariff_id' => 'integer',
        'mode_id' => 'integer',
        'status_id' => 'integer',
        'reason_id' => 'integer',
        'delay_id' => 'integer',
        'delivery_recipient_cost' => 'float',
        'cod' => 'float',
        'cod_fact' => 'float',
        'delivery_cost' => 'float',
    ];
}
