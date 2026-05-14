<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_settingsCabinet_ym', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class SettingsCabinetYm extends OpenCartModel
{
    protected $fillable = [
        'id',
        'modulName',
        'businessId',
        'campanningId',
        'token',
        'base_expence_id',
        'stocks',
        'extra_charge',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'businessId' => 'integer',
        'campanningId' => 'integer',
        'base_expence_id' => 'integer',
        'stocks' => 'integer',
        'extra_charge' => 'float',
    ];
}
