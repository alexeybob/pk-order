<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_tariffs_commission', connection: 'opencart', primaryKey: 'category_id', incrementing: false, timestamps: false)]
class OzonTariffsCommission extends OpenCartModel
{
    protected $fillable = [
        'category_id',
        'prefix',
        'commission',
        'updated_at',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'commission' => 'float',
    ];
}
