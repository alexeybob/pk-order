<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_variant', connection: 'opencart', primaryKey: 'relatedoptions_variant_id', incrementing: true, timestamps: false)]
class RelatedoptionsVariant extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_variant_id',
        'relatedoptions_variant_name',
        'sort_order',
    ];

    protected $casts = [
        'relatedoptions_variant_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
