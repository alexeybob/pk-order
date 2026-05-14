<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_poip_main_option_settings', connection: 'opencart', incrementing: false, timestamps: false)]
class PoipMainOptionSetting extends OpenCartModel
{
    protected $fillable = [
        'option_id',
        'img_change',
        'img_hover',
        'img_use',
        'img_limit',
        'img_gal',
        'img_option',
        'img_category',
        'img_first',
        'img_from_option',
        'img_sort',
        'img_select',
        'img_cart',
    ];

    protected $casts = [
        'option_id' => 'integer',
        'img_change' => 'boolean',
        'img_hover' => 'boolean',
        'img_use' => 'boolean',
        'img_limit' => 'boolean',
        'img_gal' => 'boolean',
        'img_option' => 'boolean',
        'img_category' => 'boolean',
        'img_first' => 'boolean',
        'img_from_option' => 'boolean',
        'img_sort' => 'boolean',
        'img_select' => 'boolean',
        'img_cart' => 'boolean',
    ];
}
