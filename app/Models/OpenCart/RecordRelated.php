<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_related', connection: 'opencart', incrementing: false, timestamps: false)]
class RecordRelated extends OpenCartModel
{
    protected $fillable = [
        'pointer_id',
        'related_id',
        'pointer',
    ];

    protected $casts = [
        'pointer_id' => 'integer',
        'related_id' => 'integer',
    ];
}
