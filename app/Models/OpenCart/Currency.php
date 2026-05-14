<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_currency', connection: 'opencart', primaryKey: 'currency_id', incrementing: true, timestamps: false)]
class Currency extends OpenCartModel
{
    protected $fillable = [
        'currency_id',
        'title',
        'code',
        'symbol_left',
        'symbol_right',
        'decimal_place',
        'value',
        'status',
        'date_modified',
    ];

    protected $casts = [
        'currency_id' => 'integer',
        'value' => 'float',
        'status' => 'boolean',
    ];
}
