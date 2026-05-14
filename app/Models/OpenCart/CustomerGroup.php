<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_customer_group', connection: 'opencart', primaryKey: 'customer_group_id', incrementing: true, timestamps: false)]
class CustomerGroup extends OpenCartModel
{
    protected $fillable = [
        'customer_group_id',
        'approval',
        'company_id_display',
        'company_id_required',
        'tax_id_display',
        'tax_id_required',
        'sort_order',
    ];

    protected $casts = [
        'customer_group_id' => 'integer',
        'approval' => 'integer',
        'company_id_display' => 'integer',
        'company_id_required' => 'integer',
        'tax_id_display' => 'integer',
        'tax_id_required' => 'integer',
        'sort_order' => 'integer',
    ];
}
