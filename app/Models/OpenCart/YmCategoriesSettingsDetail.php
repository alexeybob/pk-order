<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_categories_settings_detail', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmCategoriesSettingsDetail extends OpenCartModel
{
    protected $fillable = [
        'id',
        'category_id_api',
        'category_name_api',
        'name_attr_api',
        'attr_Id',
        'name_attr_web',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id_api' => 'integer',
        'attr_Id' => 'integer',
    ];
}
