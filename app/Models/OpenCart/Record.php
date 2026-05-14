<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record', connection: 'opencart', primaryKey: 'record_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class Record extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'blog_main',
        'image',
        'sort_order',
        'status',
        'customer_group_id',
        'customer_id',
        'author',
        'index_page',
        'comment',
        'comment_status',
        'comment_status_reg',
        'comment_status_now',
        'date_available',
        'date_end',
        'date_added',
        'date_modified',
        'viewed',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'blog_main' => 'integer',
        'sort_order' => 'integer',
        'status' => 'boolean',
        'customer_group_id' => 'integer',
        'customer_id' => 'integer',
        'comment_status' => 'boolean',
        'comment_status_reg' => 'boolean',
        'comment_status_now' => 'boolean',
        'viewed' => 'integer',
    ];
}
