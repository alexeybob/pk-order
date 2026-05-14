<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_tag', connection: 'opencart', primaryKey: 'record_tag_id', incrementing: true, timestamps: false)]
class RecordTag extends OpenCartModel
{
    protected $fillable = [
        'record_tag_id',
        'record_id',
        'language_id',
        'tag',
    ];

    protected $casts = [
        'record_tag_id' => 'integer',
        'record_id' => 'integer',
        'language_id' => 'integer',
    ];
}
