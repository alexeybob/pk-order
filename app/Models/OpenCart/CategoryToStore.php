<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_category_to_store', connection: 'opencart', primaryKey: 'category_id', incrementing: false, timestamps: false)]
class CategoryToStore extends OpenCartModel
{
    protected $fillable = [
        'category_id',
        'store_id',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'store_id' => 'integer',
    ];
}
