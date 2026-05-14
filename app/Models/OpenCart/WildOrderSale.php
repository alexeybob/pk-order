<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild_order_sales', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class WildOrderSale extends OpenCartModel
{
    protected $fillable = [
        'id',
        'order_id',
        'order_barcode_num',
        'price',
        'comments',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'order_barcode_num' => 'integer',
        'status' => 'boolean',
    ];
}
