<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_language', connection: 'opencart', primaryKey: 'language_id', incrementing: true, timestamps: false)]
class Language extends OpenCartModel
{
    protected $fillable = [
        'language_id',
        'name',
        'code',
        'locale',
        'image',
        'directory',
        'filename',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'language_id' => 'integer',
        'sort_order' => 'integer',
        'status' => 'boolean',
    ];
}
