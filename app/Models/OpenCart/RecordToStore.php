<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_to_store', connection: 'opencart', primaryKey: 'record_id', incrementing: false, timestamps: false)]
class RecordToStore extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'store_id',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'store_id' => 'integer',
    ];
}
