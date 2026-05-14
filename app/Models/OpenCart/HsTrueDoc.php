<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_hs_true_docs', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class HsTrueDoc extends OpenCartModel
{
    protected $fillable = [
        'id',
        'number',
        'type',
        'status',
        'doc_date',
        'received_at',
        'invoice_number',
        'invoice_date',
        'sender_inn',
        'sender_name',
        'receiver_inn',
        'receiver_name',
        'sum_nds',
        'knd',
        'doc_function',
        'upd_number',
        'upd_date',
        'acceptance_code',
        'product_group',
        'raw',
        'created_at',
        'updated_at',
        'total_with_tax',
    ];

    protected $casts = [
        'id' => 'integer',
        'sum_nds' => 'float',
        'acceptance_code' => 'integer',
        'total_with_tax' => 'float',
    ];
}
