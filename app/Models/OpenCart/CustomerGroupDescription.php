<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_group_description', connection: 'opencart', primaryKey: 'customer_group_id', incrementing: false, timestamps: false)]
class CustomerGroupDescription extends OpenCartModel
{
    protected $fillable = [
        'customer_group_id',
        'language_id',
        'name',
        'description',
    ];

    protected $casts = [
        'customer_group_id' => 'integer',
        'language_id' => 'integer',
    ];
}
