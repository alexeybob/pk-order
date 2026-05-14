<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_discount', connection: 'opencart', incrementing: false, timestamps: false)]
class RelatedoptionsDiscount extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_id',
        'customer_group_id',
        'quantity',
        'priority',
        'price',
    ];

    protected $casts = [
        'relatedoptions_id' => 'integer',
        'customer_group_id' => 'integer',
        'quantity' => 'integer',
        'priority' => 'integer',
        'price' => 'float',
    ];
}
