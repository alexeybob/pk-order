<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_option', connection: 'opencart', incrementing: false, timestamps: false)]
class RelatedoptionsOption extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_id',
        'product_id',
        'option_id',
        'option_value_id',
    ];

    protected $casts = [
        'relatedoptions_id' => 'integer',
        'product_id' => 'integer',
        'option_id' => 'integer',
        'option_value_id' => 'integer',
    ];
}
