<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_directory_mp', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class DirectoryMp extends OpenCartModel
{
    protected $fillable = [
        'id',
        'option_id',
        'parentName',
        'name',
    ];

    protected $casts = [
        'id' => 'integer',
        'option_id' => 'integer',
    ];
}
