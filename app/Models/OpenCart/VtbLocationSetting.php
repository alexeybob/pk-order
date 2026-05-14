<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_vtb_location_settings', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class VtbLocationSetting extends OpenCartModel
{
    protected $fillable = [
        'id',
        'city_id',
        'code_kladr',
        'locality_name',
    ];

    protected $casts = [
        'id' => 'integer',
        'city_id' => 'integer',
    ];
}
