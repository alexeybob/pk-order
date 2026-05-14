<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_rate_comment', connection: 'opencart', primaryKey: 'rate_id', incrementing: true, timestamps: false)]
class RateComment extends OpenCartModel
{
    protected $fillable = [
        'comment_id',
        'customer_id',
        'delta',
        'rate_id',
    ];

    protected $casts = [
        'comment_id' => 'integer',
        'customer_id' => 'integer',
        'delta' => 'float',
        'rate_id' => 'integer',
    ];
}
