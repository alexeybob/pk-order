<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_url_alias', connection: 'opencart', primaryKey: 'url_alias_id', incrementing: true, timestamps: false)]
class UrlAlias extends OpenCartModel
{
    protected $fillable = [
        'url_alias_id',
        'query',
        'keyword',
    ];

    protected $casts = [
        'url_alias_id' => 'integer',
    ];
}
