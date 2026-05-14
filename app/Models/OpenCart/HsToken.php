<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_hs_tokens', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class HsToken extends OpenCartModel
{
    protected $fillable = [
        'id',
        'inn',
        'thumbprint',
        'token',
        'token_type',
        'uuid',
        'issued_at',
        'expires_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
