<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_products_export_required_params', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmProductsExportRequiredParam extends OpenCartModel
{
    protected $fillable = [
        'id',
        'param_key',
        'title',
        'description',
        'value_type',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'value_type' => 'integer',
    ];
}
