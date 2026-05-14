<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_agoo_signer', connection: 'opencart', incrementing: false, timestamps: false)]
class AgooSigner extends OpenCartModel
{
    protected $fillable = [
        'id',
        'pointer',
        'customer_id',
        'email',
        'date',
    ];

    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
    ];
}
