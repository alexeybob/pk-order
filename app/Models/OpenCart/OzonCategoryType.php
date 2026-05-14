<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_category_type', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class OzonCategoryType extends OpenCartModel
{
    protected $fillable = [
        'id',
        'category_id',
        'ozon_category_id',
        'category_type_id',
        'text',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'ozon_category_id' => 'integer',
        'category_type_id' => 'integer',
    ];
}
