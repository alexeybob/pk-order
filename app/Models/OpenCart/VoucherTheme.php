<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_voucher_theme', connection: 'opencart', primaryKey: 'voucher_theme_id', incrementing: true, timestamps: false)]
class VoucherTheme extends OpenCartModel
{
    protected $fillable = [
        'voucher_theme_id',
        'image',
    ];

    protected $casts = [
        'voucher_theme_id' => 'integer',
    ];
}
