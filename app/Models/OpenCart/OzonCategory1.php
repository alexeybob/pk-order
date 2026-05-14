<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_category1', connection: 'opencart', primaryKey: 'ozon_category_id', incrementing: true, timestamps: false)]
class OzonCategory1 extends OpenCartModel
{
    protected $fillable = [
        'ozon_category_id',
        'level1',
        'level2',
        'level3',
        'level4',
        'level5',
        'level6',
    ];

    protected $casts = [
        'ozon_category_id' => 'integer',
    ];
}
