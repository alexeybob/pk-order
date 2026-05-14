<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_files_backup', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class FilesBackup extends OpenCartModel
{
    protected $fillable = [
        'date',
        'filepath',
        'filecontent',
        'id',
        'type',
    ];

    protected $casts = [
        'date' => 'integer',
        'id' => 'integer',
    ];
}
