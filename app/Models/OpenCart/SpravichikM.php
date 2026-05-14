<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_spravichik_m', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class SpravichikM extends OpenCartModel
{
    protected $fillable = [
        'id',
        'offer_id',
        'relatedoptions_id',
        'product_id',
        'model',
        'upc',
        'manufacturer_id',
        'manufacturer_name',
        'color_WB',
        'color_OZON',
        'color_filtr',
        'color_original',
        'size_wb',
        'size_wb_m',
        'size_ozon',
        'size_ozon_m',
        'size_filtr',
        'size_filtr_original',
        'size_filtr_m',
    ];

    protected $casts = [
        'id' => 'integer',
        'relatedoptions_id' => 'integer',
        'product_id' => 'integer',
        'manufacturer_id' => 'integer',
    ];
}
