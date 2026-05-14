<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_param_mapping', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmParamMapping extends OpenCartModel
{
    protected $fillable = [
        'id',
        'oc_param_id',
        'ym_param_id',
        'oc_category_id',
        'ym_category_id',
        'option_type_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'oc_param_id' => 'integer',
        'ym_param_id' => 'integer',
        'oc_category_id' => 'integer',
        'ym_category_id' => 'integer',
        'option_type_id' => 'integer',
    ];
}
