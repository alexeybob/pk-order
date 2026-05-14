<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_affiliate_transaction', connection: 'opencart', primaryKey: 'affiliate_transaction_id', incrementing: true, timestamps: false)]
class AffiliateTransaction extends OpenCartModel
{
    protected $fillable = [
        'affiliate_transaction_id',
        'affiliate_id',
        'order_id',
        'description',
        'amount',
        'date_added',
    ];

    protected $casts = [
        'affiliate_transaction_id' => 'integer',
        'affiliate_id' => 'integer',
        'order_id' => 'integer',
        'amount' => 'float',
    ];
}
