<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_csvprice_pro', connection: 'opencart', primaryKey: 'setting_id', incrementing: true, timestamps: false)]
class CsvpricePro extends OpenCartModel
{
    protected $fillable = [
        'setting_id',
        'key',
        'value',
        'serialized',
    ];

    protected $casts = [
        'setting_id' => 'integer',
        'serialized' => 'boolean',
    ];
}
