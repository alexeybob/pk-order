<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_setting', connection: 'opencart', primaryKey: 'setting_id', incrementing: true, timestamps: false)]
class Setting extends OpenCartModel
{
    protected $fillable = [
        'setting_id',
        'store_id',
        'group',
        'key',
        'value',
        'serialized',
    ];

    protected $casts = [
        'setting_id' => 'integer',
        'store_id' => 'integer',
        'serialized' => 'boolean',
    ];
}
