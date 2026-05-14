<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_categories_settings', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmCategoriesSetting extends OpenCartModel
{
    protected $fillable = [
        'id',
        'category_api_id',
        'attr_api_id',
        'attr_id_web',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_api_id' => 'integer',
        'attr_api_id' => 'integer',
        'attr_id_web' => 'integer',
    ];
}
