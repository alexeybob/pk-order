<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_banner_image_description', connection: 'opencart', primaryKey: 'banner_image_id', incrementing: false, timestamps: false)]
class BannerImageDescription extends OpenCartModel
{
    protected $fillable = [
        'banner_image_id',
        'language_id',
        'banner_id',
        'title',
    ];

    protected $casts = [
        'banner_image_id' => 'integer',
        'language_id' => 'integer',
        'banner_id' => 'integer',
    ];
}
