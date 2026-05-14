<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_tax_rule', connection: 'opencart', primaryKey: 'tax_rule_id', incrementing: true, timestamps: false)]
class TaxRule extends OpenCartModel
{
    protected $fillable = [
        'tax_rule_id',
        'tax_class_id',
        'tax_rate_id',
        'based',
        'priority',
    ];

    protected $casts = [
        'tax_rule_id' => 'integer',
        'tax_class_id' => 'integer',
        'tax_rate_id' => 'integer',
        'priority' => 'integer',
    ];
}
