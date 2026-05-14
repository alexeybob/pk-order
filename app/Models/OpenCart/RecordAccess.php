<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_access', connection: 'opencart', incrementing: false, timestamps: false)]
class RecordAccess extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'customer_group_id',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'customer_group_id' => 'integer',
    ];
}
