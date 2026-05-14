<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_agora_products_link_error', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class AgoraProductsLinkError extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'error_type',
        'url',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'status' => 'boolean',
    ];
}
