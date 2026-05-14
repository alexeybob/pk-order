<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_category_to_layout', connection: 'opencart', primaryKey: 'category_id', incrementing: false, timestamps: false)]
class CategoryToLayout extends OpenCartModel
{
    protected $fillable = [
        'category_id',
        'store_id',
        'layout_id',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'store_id' => 'integer',
        'layout_id' => 'integer',
    ];
}
