<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_filter_group_description', connection: 'opencart', primaryKey: 'filter_group_id', incrementing: false, timestamps: false)]
class FilterGroupDescription extends OpenCartModel
{
    protected $fillable = [
        'filter_group_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'filter_group_id' => 'integer',
        'language_id' => 'integer',
    ];
}
