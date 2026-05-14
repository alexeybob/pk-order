<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_vtb_categories_settings', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class VtbCategoriesSetting extends OpenCartModel
{
    protected $fillable = [
        'id',
        'name',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'status' => 'integer',
    ];
}
