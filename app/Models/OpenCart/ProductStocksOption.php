<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_stocks_option', connection: 'opencart', incrementing: false, timestamps: false)]
class ProductStocksOption extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_id',
        'product_id',
        'option_id',
        'option_value_id',
        'quantity',
        'flag',
    ];

    protected $casts = [
        'relatedoptions_id' => 'integer',
        'product_id' => 'integer',
        'option_id' => 'integer',
        'option_value_id' => 'integer',
        'quantity' => 'integer',
        'flag' => 'integer',
    ];
}
