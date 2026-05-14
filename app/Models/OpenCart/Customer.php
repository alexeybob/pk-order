<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer', connection: 'opencart', primaryKey: 'customer_id', incrementing: true, timestamps: false)]
class Customer extends OpenCartModel
{
    protected $fillable = [
        'customer_id',
        'store_id',
        'firstname',
        'lastname',
        'avatar',
        'email',
        'telephone',
        'fax',
        'password',
        'salt',
        'cart',
        'wishlist',
        'newsletter',
        'address_id',
        'customer_group_id',
        'ip',
        'status',
        'approved',
        'token',
        'date_added',
    ];

    protected $casts = [
        'customer_id' => 'integer',
        'store_id' => 'integer',
        'newsletter' => 'boolean',
        'address_id' => 'integer',
        'customer_group_id' => 'integer',
        'status' => 'boolean',
        'approved' => 'boolean',
    ];
}
