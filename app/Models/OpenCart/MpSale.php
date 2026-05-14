<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_mp_sales', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class MpSale extends OpenCartModel
{
    protected $fillable = [
        'id',
        'mp',
        'mp_cabinet',
        'sale_key',
        'mp_order_id',
        'mp_item_id',
        'sku',
        'barcode',
        'gtin',
        'quantity',
        'sale_date',
        'is_return',
        'raw_json',
        'date_added',
    ];

    protected $casts = [
        'id' => 'integer',
        'quantity' => 'integer',
        'is_return' => 'boolean',
    ];
}
