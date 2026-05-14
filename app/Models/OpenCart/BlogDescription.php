<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_blog_description', connection: 'opencart', primaryKey: 'blog_id', incrementing: false, timestamps: false)]
class BlogDescription extends OpenCartModel
{
    protected $fillable = [
        'blog_id',
        'language_id',
        'name',
        'description',
        'meta_h1',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];

    protected $casts = [
        'blog_id' => 'integer',
        'language_id' => 'integer',
    ];
}
