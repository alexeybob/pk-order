<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_redirect', connection: 'opencart', primaryKey: 'redirect_id', incrementing: true, timestamps: false)]
class Redirect extends OpenCartModel
{
    protected $fillable = [
        'redirect_id',
        'active',
        'from_url',
        'to_url',
        'response_code',
        'date_start',
        'date_end',
        'times_used',
        'product_id',
    ];

    protected $casts = [
        'redirect_id' => 'integer',
        'active' => 'boolean',
        'response_code' => 'integer',
        'times_used' => 'integer',
        'product_id' => 'integer',
    ];
}
