<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_products_export_manafacture_returns', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmProductsExportManafactureReturn extends OpenCartModel
{
    protected $fillable = [
        'id',
        'buissnesId',
        'oc_category_id',
        'oc_manafacture_id',
        'procent_returns',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'buissnesId' => 'integer',
        'oc_category_id' => 'integer',
        'oc_manafacture_id' => 'integer',
        'procent_returns' => 'float',
    ];
}
