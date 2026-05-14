<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_review', connection: 'opencart', primaryKey: 'review_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class Review extends OpenCartModel
{
    protected $fillable = [
        'review_id',
        'product_id',
        'parent_id',
        'sorthex',
        'customer_id',
        'author',
        'text',
        'rating',
        'rating_mark',
        'status',
        'language_id',
        'type_id',
        'cmswidget',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'review_id' => 'integer',
        'product_id' => 'integer',
        'parent_id' => 'integer',
        'sorthex' => 'integer',
        'customer_id' => 'integer',
        'rating' => 'integer',
        'rating_mark' => 'boolean',
        'status' => 'boolean',
        'language_id' => 'integer',
        'type_id' => 'integer',
        'cmswidget' => 'integer',
    ];
}
