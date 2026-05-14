<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_yoomoney_product_properties', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class YoomoneyProductProperty extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'payment_subject',
        'payment_mode',
    ];

    protected $casts = [
        'product_id' => 'integer',
    ];
}
