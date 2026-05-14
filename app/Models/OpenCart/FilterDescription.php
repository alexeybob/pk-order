<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_filter_description', connection: 'opencart', primaryKey: 'filter_id', incrementing: false, timestamps: false)]
class FilterDescription extends OpenCartModel
{
    protected $fillable = [
        'filter_id',
        'language_id',
        'filter_group_id',
        'name',
    ];

    protected $casts = [
        'filter_id' => 'integer',
        'language_id' => 'integer',
        'filter_group_id' => 'integer',
    ];
}
