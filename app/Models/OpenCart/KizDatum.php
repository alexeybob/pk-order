<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_kiz_data', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class KizDatum extends OpenCartModel
{
    protected $fillable = [
        'id',
        'order_id',
        'order_product_id',
        'product_id',
        'barcode',
        'gtin',
        'relatedoptions_id',
        'kiz',
        'serial',
        'mp_cabinet',
        'mp_order_id',
        'mp_item_id',
        'date_modified',
        'status',
        'error_message',
    ];

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'order_product_id' => 'integer',
        'product_id' => 'integer',
        'relatedoptions_id' => 'integer',
        'status' => 'boolean',
    ];
}
