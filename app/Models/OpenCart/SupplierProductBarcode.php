<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_supplier_product_barcodes', connection: 'opencart', incrementing: false, timestamps: false)]
class SupplierProductBarcode extends OpenCartModel
{
    protected $fillable = [
        'id',
        'relatedoptions_id',
        'barcode',
    ];

    protected $casts = [
        'id' => 'integer',
        'relatedoptions_id' => 'integer',
    ];
}
