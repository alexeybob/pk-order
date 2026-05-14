<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_category_appointed', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class OzonCategoryAppointed extends OpenCartModel
{
    protected $fillable = [
        'id',
        'category_id',
        'ozon_category_id',
        'name',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'ozon_category_id' => 'integer',
    ];
}
