<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_filter_group', connection: 'opencart', primaryKey: 'filter_group_id', incrementing: true, timestamps: false)]
class FilterGroup extends OpenCartModel
{
    protected $fillable = [
        'filter_group_id',
        'sort_order',
    ];

    protected $casts = [
        'filter_group_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
