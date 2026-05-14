<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_stock_status', connection: 'opencart', primaryKey: 'stock_status_id', incrementing: true, timestamps: false)]
class StockStatus extends OpenCartModel
{
    protected $fillable = [
        'stock_status_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'stock_status_id' => 'integer',
        'language_id' => 'integer',
    ];
}
