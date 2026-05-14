<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_mp_category_map', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class MpCategoryMap extends OpenCartModel
{
    protected $fillable = [
        'id',
        'buissnesId',
        'oc_category_id',
        'ym_category_id',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'buissnesId' => 'integer',
        'oc_category_id' => 'integer',
        'ym_category_id' => 'integer',
        'status' => 'boolean',
    ];
}
