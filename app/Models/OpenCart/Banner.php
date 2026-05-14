<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_banner', connection: 'opencart', primaryKey: 'banner_id', incrementing: true, timestamps: false)]
class Banner extends OpenCartModel
{
    protected $fillable = [
        'banner_id',
        'name',
        'status',
    ];

    protected $casts = [
        'banner_id' => 'integer',
        'status' => 'boolean',
    ];
}
