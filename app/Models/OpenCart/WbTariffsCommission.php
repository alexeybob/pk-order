<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wb_tariffs_commission', connection: 'opencart', primaryKey: 'subject_name', incrementing: false, timestamps: false)]
class WbTariffsCommission extends OpenCartModel
{
    protected $fillable = [
        'subject_name',
        'commission',
        'updated_at',
    ];

    protected $casts = [
        'commission' => 'float',
    ];
}
