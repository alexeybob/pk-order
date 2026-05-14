<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_wb_order_index_test', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class WbOrderIndexTest extends OpenCartModel
{
    protected $fillable = [
        'id',
        'cabinet_code',
        'shop_order_id',
        'wild_order_id',
        'srid',
        'rid',
        'sticker_id',
        'shk_id',
        'barcode',
        'nm_id',
        'kiz',
        'wb_doc_type_name',
        'wb_supplier_oper_name',
        'wb_sale_dt',
        'wb_return_dt',
        'wb_last_dt',
        'wb_state',
        'need_return_to_turnover',
        'returned_to_turnover',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'id' => 'integer',
        'shop_order_id' => 'integer',
        'wild_order_id' => 'integer',
        'rid' => 'integer',
        'nm_id' => 'integer',
        'need_return_to_turnover' => 'boolean',
        'returned_to_turnover' => 'boolean',
    ];
}
