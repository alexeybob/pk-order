<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_order_download', connection: 'opencart', primaryKey: 'order_download_id', incrementing: true, timestamps: false)]
class OrderDownload extends OpenCartModel
{
    protected $fillable = [
        'order_download_id',
        'order_id',
        'order_product_id',
        'name',
        'filename',
        'mask',
        'remaining',
    ];

    protected $casts = [
        'order_download_id' => 'integer',
        'order_id' => 'integer',
        'order_product_id' => 'integer',
        'remaining' => 'integer',
    ];
}
