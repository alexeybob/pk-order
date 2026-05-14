<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_category_path', connection: 'opencart', primaryKey: 'category_id', incrementing: false, timestamps: false)]
class CategoryPath extends OpenCartModel
{
    protected $fillable = [
        'category_id',
        'path_id',
        'level',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'path_id' => 'integer',
        'level' => 'integer',
    ];
}
