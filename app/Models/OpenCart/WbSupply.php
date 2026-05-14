<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wb_supplies', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WbSupply extends OpenCartModel
{
    protected $fillable = [
        'id',
        'wb_id',
        'mp',
        'name',
        'createdAt',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
