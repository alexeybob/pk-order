<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_csvprice_pro_images', connection: 'opencart', primaryKey: 'catalog_id', incrementing: false, timestamps: false)]
class CsvpriceProImage extends OpenCartModel
{
    protected $fillable = [
        'catalog_id',
        'image_key',
        'image_path',
    ];

    protected $casts = [
        'catalog_id' => 'integer',
    ];
}
