<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_manufacturer_description', connection: 'opencart', primaryKey: 'manufacturer_id', incrementing: false, timestamps: false)]
class ManufacturerDescription extends OpenCartModel
{
    protected $fillable = [
        'manufacturer_id',
        'language_id',
        'description',
        'meta_description',
        'meta_keyword',
        'seo_title',
        'seo_h1',
    ];

    protected $casts = [
        'manufacturer_id' => 'integer',
        'language_id' => 'integer',
    ];
}
