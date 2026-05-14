<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_blog_to_layout', connection: 'opencart', primaryKey: 'blog_id', incrementing: false, timestamps: false)]
class BlogToLayout extends OpenCartModel
{
    protected $fillable = [
        'blog_id',
        'store_id',
        'layout_id',
    ];

    protected $casts = [
        'blog_id' => 'integer',
        'store_id' => 'integer',
        'layout_id' => 'integer',
    ];
}
