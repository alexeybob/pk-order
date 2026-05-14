<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product', connection: 'opencart', primaryKey: 'product_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class Product extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'model',
        'model_name',
        'sku',
        'upc',
        'ean',
        'jan',
        'isbn',
        'mpn',
        'ved',
        'location',
        'quantity',
        'stock_status_id',
        'image',
        'manufacturer_id',
        'shipping',
        'price',
        'points',
        'tax_class_id',
        'date_available',
        'weight',
        'weight_class_id',
        'length',
        'width',
        'height',
        'volume',
        'length_class_id',
        'subtract',
        'minimum',
        'sort_order',
        'status',
        'date_added',
        'date_modified',
        'viewed',
        'supplier',
        'code_opts_id',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'location' => 'float',
        'quantity' => 'integer',
        'stock_status_id' => 'integer',
        'manufacturer_id' => 'integer',
        'shipping' => 'boolean',
        'price' => 'float',
        'points' => 'integer',
        'tax_class_id' => 'integer',
        'weight' => 'float',
        'weight_class_id' => 'integer',
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'volume' => 'float',
        'length_class_id' => 'integer',
        'subtract' => 'boolean',
        'minimum' => 'integer',
        'sort_order' => 'integer',
        'status' => 'boolean',
        'viewed' => 'integer',
    ];
}
