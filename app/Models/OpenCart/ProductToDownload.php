<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_to_download', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductToDownload extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'download_id',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'download_id' => 'integer',
    ];
}
