<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_to_layout', connection: 'opencart', primaryKey: 'record_id', incrementing: false, timestamps: false)]
class RecordToLayout extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'store_id',
        'layout_id',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'store_id' => 'integer',
        'layout_id' => 'integer',
    ];
}
