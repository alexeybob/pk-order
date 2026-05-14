<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_products_export_required_params_value', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmProductsExportRequiredParamsValue extends OpenCartModel
{
    protected $fillable = [
        'id',
        'oc_category_id',
        'ym_category_id',
        'param_id',
        'value',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'oc_category_id' => 'integer',
        'ym_category_id' => 'integer',
        'param_id' => 'integer',
    ];
}
