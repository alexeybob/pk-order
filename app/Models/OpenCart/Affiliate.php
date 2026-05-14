<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_affiliate', connection: 'opencart', primaryKey: 'affiliate_id', incrementing: true, timestamps: false)]
class Affiliate extends OpenCartModel
{
    protected $fillable = [
        'affiliate_id',
        'firstname',
        'lastname',
        'email',
        'telephone',
        'fax',
        'password',
        'salt',
        'company',
        'website',
        'address_1',
        'address_2',
        'city',
        'postcode',
        'country_id',
        'zone_id',
        'code',
        'commission',
        'tax',
        'payment',
        'cheque',
        'paypal',
        'bank_name',
        'bank_branch_number',
        'bank_swift_code',
        'bank_account_name',
        'bank_account_number',
        'ip',
        'status',
        'approved',
        'date_added',
    ];

    protected $casts = [
        'affiliate_id' => 'integer',
        'country_id' => 'integer',
        'zone_id' => 'integer',
        'commission' => 'float',
        'status' => 'boolean',
        'approved' => 'boolean',
    ];
}
