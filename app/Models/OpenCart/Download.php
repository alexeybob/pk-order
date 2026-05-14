<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_download', connection: 'opencart', primaryKey: 'download_id', incrementing: true, timestamps: false)]
class Download extends OpenCartModel
{
    protected $fillable = [
        'download_id',
        'filename',
        'mask',
        'remaining',
        'date_added',
    ];

    protected $casts = [
        'download_id' => 'integer',
        'remaining' => 'integer',
    ];
}
