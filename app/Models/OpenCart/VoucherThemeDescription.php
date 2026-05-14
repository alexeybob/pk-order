<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_voucher_theme_description', connection: 'opencart', primaryKey: 'voucher_theme_id', incrementing: false, timestamps: false)]
class VoucherThemeDescription extends OpenCartModel
{
    protected $fillable = [
        'voucher_theme_id',
        'language_id',
        'name',
    ];

    protected $casts = [
        'voucher_theme_id' => 'integer',
        'language_id' => 'integer',
    ];
}
