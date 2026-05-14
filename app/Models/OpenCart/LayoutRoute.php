<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_layout_route', connection: 'opencart', primaryKey: 'layout_route_id', incrementing: true, timestamps: false)]
class LayoutRoute extends OpenCartModel
{
    protected $fillable = [
        'layout_route_id',
        'layout_id',
        'store_id',
        'route',
    ];

    protected $casts = [
        'layout_route_id' => 'integer',
        'layout_id' => 'integer',
        'store_id' => 'integer',
    ];
}
