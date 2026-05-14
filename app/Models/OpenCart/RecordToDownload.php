<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_to_download', connection: 'opencart', primaryKey: 'record_id', incrementing: false, timestamps: false)]
class RecordToDownload extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'download_id',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'download_id' => 'integer',
    ];
}
