<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_rate_review', connection: 'opencart', primaryKey: 'rate_id', incrementing: true, timestamps: false)]
class RateReview extends OpenCartModel
{
    protected $fillable = [
        'review_id',
        'customer_id',
        'delta',
        'rate_id',
    ];

    protected $casts = [
        'review_id' => 'integer',
        'customer_id' => 'integer',
        'delta' => 'float',
        'rate_id' => 'integer',
    ];
}
