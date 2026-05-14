<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_information_to_layout', connection: 'opencart', primaryKey: 'information_id', incrementing: false, timestamps: false)]
class InformationToLayout extends OpenCartModel
{
    protected $fillable = [
        'information_id',
        'store_id',
        'layout_id',
    ];

    protected $casts = [
        'information_id' => 'integer',
        'store_id' => 'integer',
        'layout_id' => 'integer',
    ];
}
