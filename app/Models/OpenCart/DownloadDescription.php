<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_download_description', connection: 'opencart', primaryKey: 'download_id', incrementing: false, timestamps: false)]
class DownloadDescription extends OpenCartModel
{
    protected $fillable = [
        'download_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'download_id' => 'integer',
        'language_id' => 'integer',
    ];
}
