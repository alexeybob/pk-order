<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_category_filter', connection: 'opencart', primaryKey: 'category_id', incrementing: false, timestamps: false)]
class CategoryFilter extends OpenCartModel
{
    protected $fillable = [
        'category_id',
        'filter_id',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'filter_id' => 'integer',
    ];
}
