<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_hj_import_settings', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class HjImportSetting extends OpenCartModel
{
    protected $fillable = [
        'id',
        'group',
        'step',
        'name',
        'value',
    ];

    protected $casts = [
        'id' => 'integer',
        'step' => 'integer',
    ];
}
