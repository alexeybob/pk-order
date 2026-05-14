<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_products_export_queue', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmProductsExportQueue extends OpenCartModel
{
    protected $fillable = [
        'id',
        'cabinet_code',
        'event_type',
        'posting_number',
        'payload',
        'payload_hash',
        'status',
        'error_text',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
