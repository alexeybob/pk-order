<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_comment', connection: 'opencart', primaryKey: 'comment_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class Comment extends OpenCartModel
{
    protected $fillable = [
        'comment_id',
        'record_id',
        'parent_id',
        'customer_id',
        'author',
        'text',
        'rating',
        'rating_mark',
        'sorthex',
        'status',
        'language_id',
        'type_id',
        'cmswidget',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'comment_id' => 'integer',
        'record_id' => 'integer',
        'parent_id' => 'integer',
        'customer_id' => 'integer',
        'rating' => 'integer',
        'rating_mark' => 'boolean',
        'status' => 'boolean',
        'language_id' => 'integer',
        'type_id' => 'integer',
        'cmswidget' => 'integer',
    ];
}
