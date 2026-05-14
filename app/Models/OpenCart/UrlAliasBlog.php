<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_url_alias_blog', connection: 'opencart', primaryKey: 'url_alias_id', incrementing: true, timestamps: false)]
class UrlAliasBlog extends OpenCartModel
{
    protected $fillable = [
        'url_alias_id',
        'query',
        'blog_id',
        'keyword',
        'language_id',
    ];

    protected $casts = [
        'url_alias_id' => 'integer',
        'blog_id' => 'integer',
        'language_id' => 'integer',
    ];
}
