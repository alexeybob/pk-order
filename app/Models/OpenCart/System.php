<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('system', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class System extends OpenCartModel
{
    protected $fillable = [
        'id',
        'sysdata',
        'posts',
        'without_img',
    ];

    protected $casts = [
        'id' => 'integer',
        'sysdata' => 'integer',
        'posts' => 'integer',
        'without_img' => 'integer',
    ];
}
