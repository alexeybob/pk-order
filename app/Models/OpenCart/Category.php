<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_category', connection: 'opencart', primaryKey: 'category_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class Category extends OpenCartModel
{
    protected $fillable = [
        'category_id',
        'image',
        'parent_id',
        'top',
        'column',
        'sort_order',
        'status',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'parent_id' => 'integer',
        'top' => 'boolean',
        'column' => 'integer',
        'sort_order' => 'integer',
        'status' => 'boolean',
    ];
}
