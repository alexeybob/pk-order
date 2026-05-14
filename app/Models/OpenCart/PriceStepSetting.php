<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_price_step_setting', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class PriceStepSetting extends OpenCartModel
{
    protected $fillable = [
        'id',
        'MP',
        'minP',
        'maxP',
        'changeprice',
        'discount',
    ];

    protected $casts = [
        'id' => 'integer',
        'minP' => 'integer',
        'maxP' => 'integer',
        'changeprice' => 'float',
        'discount' => 'float',
    ];
}
