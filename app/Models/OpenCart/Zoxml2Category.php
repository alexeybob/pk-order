<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_zoxml2_categories', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Zoxml2Category extends OpenCartModel
{
    protected $fillable = [
        'id',
        'session_key',
        'data',
        'name',
        'parent',
        'category_id',
        'total',
        'path',
        'margin',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'total' => 'integer',
    ];
}
