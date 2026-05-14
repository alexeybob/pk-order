<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_products_export_attr_reference_mapping', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmProductsExportAttrReferenceMapping extends OpenCartModel
{
    protected $fillable = [
        'id',
        'oc_param_id',
        'option_type_id',
        'ym_param_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'oc_param_id' => 'integer',
        'option_type_id' => 'integer',
        'ym_param_id' => 'integer',
    ];
}
