<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_setting_unload_marketplaces', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class SettingUnloadMarketplace extends OpenCartModel
{
    protected $fillable = [
        'id',
        'prefix',
        'supplier_name',
        'marketplaces',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'status' => 'integer',
    ];
}
