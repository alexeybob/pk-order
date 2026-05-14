<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_blog', connection: 'opencart', primaryKey: 'blog_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class Blog extends OpenCartModel
{
    protected $fillable = [
        'blog_id',
        'path',
        'image',
        'design',
        'parent_id',
        'sort_order',
        'status',
        'index_page',
        'customer_group_id',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'blog_id' => 'integer',
        'parent_id' => 'integer',
        'sort_order' => 'integer',
        'status' => 'boolean',
        'customer_group_id' => 'integer',
    ];
}
