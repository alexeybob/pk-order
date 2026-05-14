<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_hs_true_doc_items', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class HsTrueDocItem extends OpenCartModel
{
    protected $fillable = [
        'id',
        'doc_id',
        'line_no',
        'code',
        'code_type',
        'name',
        'article',
        'is_transferred',
        'price_with_tax',
    ];

    protected $casts = [
        'id' => 'integer',
        'doc_id' => 'integer',
        'line_no' => 'integer',
        'is_transferred' => 'boolean',
        'price_with_tax' => 'float',
    ];
}
