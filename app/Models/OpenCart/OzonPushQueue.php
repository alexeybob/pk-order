<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ozon_push_queue', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class OzonPushQueue extends OpenCartModel
{
    protected $fillable = [
        'id',
        'cabinet_code',
        'event_type',
        'posting_number',
        'payload',
        'status',
        'error_text',
        'date_added',
        'date_modified',
        'payload_hash',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
