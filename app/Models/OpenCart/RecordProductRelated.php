<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_product_related', connection: 'opencart', primaryKey: 'record_id', incrementing: false, timestamps: false)]
class RecordProductRelated extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'product_id',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'product_id' => 'integer',
    ];
}
