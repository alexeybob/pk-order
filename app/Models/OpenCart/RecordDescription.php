<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_description', connection: 'opencart', primaryKey: 'record_id', incrementing: true, timestamps: false)]
class RecordDescription extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'language_id',
        'name',
        'sdescription',
        'description',
        'meta_h1',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'language_id' => 'integer',
    ];
}
