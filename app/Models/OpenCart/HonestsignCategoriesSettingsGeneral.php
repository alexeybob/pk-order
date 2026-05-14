<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_honestsign_categories_settings_general', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class HonestsignCategoriesSettingsGeneral extends OpenCartModel
{
    protected $fillable = [
        'id',
        'category_id',
        'honestsign_category',
        'general_name',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
    ];
}
