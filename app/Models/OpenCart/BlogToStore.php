<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_blog_to_store', connection: 'opencart', primaryKey: 'blog_id', incrementing: false, timestamps: false)]
class BlogToStore extends OpenCartModel
{
    protected $fillable = [
        'blog_id',
        'store_id',
    ];

    protected $casts = [
        'blog_id' => 'integer',
        'store_id' => 'integer',
    ];
}
