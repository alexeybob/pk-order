<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_category', connection: 'opencart', primaryKey: 'ozon_category_id', incrementing: true, timestamps: false)]
class OzonCategory extends OpenCartModel
{
    protected $fillable = [
        'ozon_category_id',
        'level1',
        'level2',
        'level3',
        'level4',
        'level5',
        'level6',
        'date_modified',
    ];

    protected $casts = [
        'ozon_category_id' => 'integer',
    ];
}
