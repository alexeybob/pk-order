<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_baseExpance', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmBaseExpance extends OpenCartModel
{
    protected $fillable = [
        'id',
        'acceptance_sc',
        'delivery_for_pvz',
        'max_delivery_amount',
        'delivery_to_client',
        'cost_first_litr',
        'cost_next_litr',
        'return_dil_cost_first_litr',
        'return_dil_cost_next_litr',
        'withdrawal_of_funds',
        'office_expenses',
        'reserv_rashod',
        'refund_processing',
        'return_delivery',
        'repeat_delivery',
        'dop_comisions_ym_procent',
        'net_profit_procent',
        'returns_procent',
        'ecvaring',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'acceptance_sc' => 'float',
        'delivery_for_pvz' => 'float',
        'max_delivery_amount' => 'float',
        'delivery_to_client' => 'float',
        'cost_first_litr' => 'float',
        'cost_next_litr' => 'float',
        'return_dil_cost_first_litr' => 'float',
        'return_dil_cost_next_litr' => 'float',
        'withdrawal_of_funds' => 'float',
        'office_expenses' => 'float',
        'reserv_rashod' => 'float',
        'refund_processing' => 'float',
        'return_delivery' => 'float',
        'repeat_delivery' => 'float',
        'dop_comisions_ym_procent' => 'float',
        'net_profit_procent' => 'float',
        'returns_procent' => 'float',
        'ecvaring' => 'float',
    ];
}
