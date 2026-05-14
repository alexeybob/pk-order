<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_tax_rate_to_customer_group', connection: 'opencart', primaryKey: 'tax_rate_id', incrementing: false, timestamps: false)]
class TaxRateToCustomerGroup extends OpenCartModel
{
    protected $fillable = [
        'tax_rate_id',
        'customer_group_id',
    ];

    protected $casts = [
        'tax_rate_id' => 'integer',
        'customer_group_id' => 'integer',
    ];
}
