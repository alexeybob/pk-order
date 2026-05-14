<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_csvprice_pro_profiles', connection: 'opencart', primaryKey: 'profile_id', incrementing: true, timestamps: false)]
class CsvpriceProProfile extends OpenCartModel
{
    protected $fillable = [
        'profile_id',
        'key',
        'name',
        'value',
        'serialized',
    ];

    protected $casts = [
        'profile_id' => 'integer',
        'serialized' => 'boolean',
    ];
}
