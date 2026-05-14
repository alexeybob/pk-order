<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wild5_order_sales_report', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Wild5OrderSalesReport extends OpenCartModel
{
    protected $fillable = [
        'id',
        'rrd_id',
        'order_id',
        'order_barcode_num',
        'delivery_rub',
        'penalty',
        'price',
        'commission_percent',
        'warehouseName',
        'bonus_type_name',
        'create_dt',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'rrd_id' => 'integer',
        'order_id' => 'integer',
        'order_barcode_num' => 'integer',
        'delivery_rub' => 'integer',
        'penalty' => 'integer',
        'price' => 'float',
        'commission_percent' => 'float',
        'status' => 'boolean',
    ];
}
