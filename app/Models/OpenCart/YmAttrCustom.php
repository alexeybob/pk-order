<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_attr_custom', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmAttrCustom extends OpenCartModel
{
    protected $fillable = [
        'id',
        'oc_category_id',
        'ym_category_id',
        'ym_attribute_id',
        'oc_custom_name',
        'oc_custom_value',
        'ym_value_id',
        'option_type_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'oc_category_id' => 'integer',
        'ym_category_id' => 'integer',
        'ym_attribute_id' => 'integer',
        'ym_value_id' => 'integer',
        'option_type_id' => 'integer',
    ];
}
