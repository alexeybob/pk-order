<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_products_export_ssetings', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmProductsExportSseting extends OpenCartModel
{
    protected $fillable = [
        'id',
        'manafacture_id',
        'business_id',
        'category_id',
        'product_id',
        'related_option',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'manafacture_id' => 'integer',
        'business_id' => 'integer',
        'category_id' => 'integer',
        'product_id' => 'integer',
        'related_option' => 'integer',
        'status' => 'boolean',
    ];
}
