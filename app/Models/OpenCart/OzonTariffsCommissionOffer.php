<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_tariffs_commission_offer', connection: 'opencart', primaryKey: 'offer_id', incrementing: false, timestamps: false)]
class OzonTariffsCommissionOffer extends OpenCartModel
{
    protected $fillable = [
        'offer_id',
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
