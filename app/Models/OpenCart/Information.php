<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_information', connection: 'opencart', primaryKey: 'information_id', incrementing: true, timestamps: false)]
class Information extends OpenCartModel
{
    protected $fillable = [
        'information_id',
        'bottom',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'information_id' => 'integer',
        'bottom' => 'integer',
        'sort_order' => 'integer',
        'status' => 'boolean',
    ];
}
