<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_menu', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Menu extends OpenCartModel
{
    protected $fillable = [
        'id',
        'parent_id',
        'category_id',
        'main_category_id',
        'title',
        'url',
        'class',
        'position',
        'subcategory',
        'group_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'parent_id' => 'integer',
        'category_id' => 'integer',
        'main_category_id' => 'integer',
        'position' => 'integer',
        'subcategory' => 'integer',
        'group_id' => 'integer',
    ];
}
