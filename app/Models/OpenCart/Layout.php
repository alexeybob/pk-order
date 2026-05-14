<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_layout', connection: 'opencart', primaryKey: 'layout_id', incrementing: true, timestamps: false)]
class Layout extends OpenCartModel
{
    protected $fillable = [
        'layout_id',
        'name',
    ];

    protected $casts = [
        'layout_id' => 'integer',
    ];
}
