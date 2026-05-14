<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zoxml2_replace', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Zoxml2Replace extends OpenCartModel
{
    protected $fillable = [
        'id',
        'session_key',
        'type',
        'mode',
        'txt_before',
        'sort_order',
        'txt_after',
    ];

    protected $casts = [
        'id' => 'integer',
        'sort_order' => 'integer',
    ];
}
