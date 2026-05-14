<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_tax_class', connection: 'opencart', primaryKey: 'tax_class_id', incrementing: true, timestamps: true, createdAt: 'date_added', updatedAt: 'date_modified')]
class TaxClass extends OpenCartModel
{
    protected $fillable = [
        'tax_class_id',
        'title',
        'description',
        'date_added',
        'date_modified',
    ];

    protected $casts = [
        'tax_class_id' => 'integer',
    ];
}
