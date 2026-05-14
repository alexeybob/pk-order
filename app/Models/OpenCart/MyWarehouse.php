<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_my_warehouse', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class MyWarehouse extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'barcode',
        'relatedoptions_id',
        'quantity',
        'note',
        'created_at',
        'updated_at',
        'data',
        'id_manager',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'relatedoptions_id' => 'integer',
        'quantity' => 'integer',
        'id_manager' => 'integer',
    ];
}
