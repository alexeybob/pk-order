<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_information_description', connection: 'opencart', primaryKey: 'information_id', incrementing: false, timestamps: false)]
class InformationDescription extends OpenCartModel
{
    protected $fillable = [
        'information_id',
        'language_id',
        'title',
        'description',
        'meta_description',
        'meta_keyword',
        'seo_title',
        'seo_h1',
    ];

    protected $casts = [
        'information_id' => 'integer',
        'language_id' => 'integer',
    ];
}
