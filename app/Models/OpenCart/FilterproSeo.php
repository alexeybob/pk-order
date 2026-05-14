<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_filterpro_seo', connection: 'opencart', primaryKey: 'url', incrementing: false, timestamps: false)]
class FilterproSeo extends OpenCartModel
{
    protected $fillable = [
        'url',
        'data',
        'category_id',
        'manufacturer_id',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'manufacturer_id' => 'integer',
    ];
}
