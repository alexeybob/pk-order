<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_banner_image', connection: 'opencart', primaryKey: 'banner_image_id', incrementing: true, timestamps: false)]
class BannerImage extends OpenCartModel
{
    protected $fillable = [
        'banner_image_id',
        'banner_id',
        'link',
        'image',
    ];

    protected $casts = [
        'banner_image_id' => 'integer',
        'banner_id' => 'integer',
    ];
}
