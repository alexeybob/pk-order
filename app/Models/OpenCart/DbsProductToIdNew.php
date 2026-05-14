<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_dbs_product_to_id_new', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class DbsProductToIdNew extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'po_id_0',
        'pov_id_0',
        'po_id_1',
        'pov_id_1',
        'price',
        'quantity',
        'full',
        'relatedoptions_id',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'po_id_0' => 'integer',
        'pov_id_0' => 'integer',
        'po_id_1' => 'integer',
        'pov_id_1' => 'integer',
        'price' => 'float',
        'quantity' => 'integer',
        'relatedoptions_id' => 'integer',
        'status' => 'integer',
    ];
}
