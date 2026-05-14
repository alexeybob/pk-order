<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_review_fields', connection: 'opencart', incrementing: false, timestamps: false)]
class ReviewField extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'review_id',
        'mark',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'review_id' => 'integer',
    ];
}
