<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_barcode', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class RelatedoptionsBarcode extends OpenCartModel
{
    protected $fillable = [
        'id',
        'relatedoptions_id',
        'product_id',
        'barcode',
    ];

    protected $casts = [
        'id' => 'integer',
        'relatedoptions_id' => 'integer',
        'product_id' => 'integer',
    ];
}
