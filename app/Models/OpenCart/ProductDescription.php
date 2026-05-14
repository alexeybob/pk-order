<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_description', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductDescription extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'language_id',
        'name',
        'description',
        'meta_description',
        'meta_keyword',
        'seo_title',
        'seo_h1',
        'tag',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'language_id' => 'integer',
    ];
}
