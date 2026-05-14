<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_nitro_category_cache', connection: 'opencart', incrementing: false, timestamps: false)]
class NitroCategoryCache extends OpenCartModel
{
    protected $fillable = [
        'category_id',
        'cachefile',
        'expires',
    ];

    protected $casts = [
        'category_id' => 'integer',
    ];
}
