<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ogora_api_products_links', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class OgoraApiProductsLink extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'external_id',
        'url',
        'category',
        'name',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'external_id' => 'integer',
    ];
}
