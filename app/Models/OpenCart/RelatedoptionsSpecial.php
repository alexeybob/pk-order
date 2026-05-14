<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_special', connection: 'opencart', incrementing: false, timestamps: false)]
class RelatedoptionsSpecial extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_id',
        'customer_group_id',
        'priority',
        'price',
    ];

    protected $casts = [
        'relatedoptions_id' => 'integer',
        'customer_group_id' => 'integer',
        'priority' => 'integer',
        'price' => 'float',
    ];
}
