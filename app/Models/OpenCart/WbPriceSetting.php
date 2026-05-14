<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wb_price_setting', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WbPriceSetting extends OpenCartModel
{
    protected $fillable = [
        'id',
        'id_manufacturer',
        'category_id',
        'natsenka',
        'product_ids',
        'MP',
    ];

    protected $casts = [
        'id' => 'integer',
        'id_manufacturer' => 'integer',
        'category_id' => 'integer',
        'natsenka' => 'float',
    ];
}
