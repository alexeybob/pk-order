<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_variant_product', connection: 'opencart', incrementing: false, timestamps: false)]
class RelatedoptionsVariantProduct extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_variant_id',
        'product_id',
        'relatedoptions_use',
    ];

    protected $casts = [
        'relatedoptions_variant_id' => 'integer',
        'product_id' => 'integer',
        'relatedoptions_use' => 'boolean',
    ];
}
