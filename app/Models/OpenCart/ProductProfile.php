<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_product_profile', connection: 'opencart', primaryKey: 'product_id', incrementing: false, timestamps: false)]
class ProductProfile extends OpenCartModel
{
    protected $fillable = [
        'product_id',
        'profile_id',
        'customer_group_id',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'profile_id' => 'integer',
        'customer_group_id' => 'integer',
    ];
}
