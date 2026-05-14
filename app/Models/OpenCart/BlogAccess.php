<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_blog_access', connection: 'opencart', incrementing: false, timestamps: false)]
class BlogAccess extends OpenCartModel
{
    protected $fillable = [
        'blog_id',
        'customer_group_id',
    ];

    protected $casts = [
        'blog_id' => 'integer',
        'customer_group_id' => 'integer',
    ];
}
