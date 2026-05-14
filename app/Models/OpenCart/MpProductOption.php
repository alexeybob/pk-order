<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_mp_product_options', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class MpProductOption extends OpenCartModel
{
    protected $fillable = [
        'id',
        'product_id',
        'relatedoptions_id',
        'mp',
        'markup',
        'status',
        'start_at',
        'comment',
    ];

    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'relatedoptions_id' => 'integer',
        'markup' => 'float',
        'status' => 'boolean',
    ];
}
