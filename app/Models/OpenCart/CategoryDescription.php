<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_category_description', connection: 'opencart', primaryKey: 'category_id', incrementing: false, timestamps: false)]
class CategoryDescription extends OpenCartModel
{
    protected $fillable = [
        'category_id',
        'language_id',
        'name',
        'description',
        'meta_description',
        'meta_keyword',
        'seo_title',
        'seo_h1',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'language_id' => 'integer',
    ];
}
