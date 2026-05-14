<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions', connection: 'opencart', primaryKey: 'relatedoptions_id', incrementing: true, timestamps: false)]
class Relatedoption extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_id',
        'relatedoptions_variant_product_id',
        'product_id',
        'quantity',
        'price',
        'model',
        'sku',
        'upc',
        'location',
        'defaultselect',
        'defaultselectpriority',
        'weight',
        'weight_prefix',
        'description',
        'stock_status_id',
        'price_prefix',
        'ean',
    ];

    protected $casts = [
        'relatedoptions_id' => 'integer',
        'relatedoptions_variant_product_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer',
        'price' => 'float',
        'location' => 'float',
        'defaultselect' => 'integer',
        'defaultselectpriority' => 'integer',
        'weight' => 'float',
        'stock_status_id' => 'integer',
    ];
}
