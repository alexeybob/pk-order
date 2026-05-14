<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_menu_group', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class MenuGroup extends OpenCartModel
{
    protected $fillable = [
        'id',
        'title',
        'category_id',
        'sub',
    ];

    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'sub' => 'integer',
    ];
}
