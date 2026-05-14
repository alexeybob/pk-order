<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_variant_option', connection: 'opencart', incrementing: false, timestamps: false)]
class RelatedoptionsVariantOption extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_variant_id',
        'option_id',
    ];

    protected $casts = [
        'relatedoptions_variant_id' => 'integer',
        'option_id' => 'integer',
    ];
}
