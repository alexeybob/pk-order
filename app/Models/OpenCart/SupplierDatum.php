<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_supplier_data', connection: 'opencart', incrementing: false, timestamps: false)]
class SupplierDatum extends OpenCartModel
{
    protected $fillable = [
        'supplier_id',
        'supplier_date',
        'run',
        'result',
    ];

    protected $casts = [
        'run' => 'integer',
        'result' => 'integer',
    ];
}
