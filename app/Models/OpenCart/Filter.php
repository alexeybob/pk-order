<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_filter', connection: 'opencart', primaryKey: 'filter_id', incrementing: true, timestamps: false)]
class Filter extends OpenCartModel
{
    protected $fillable = [
        'filter_id',
        'filter_group_id',
        'sort_order',
    ];

    protected $casts = [
        'filter_id' => 'integer',
        'filter_group_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
