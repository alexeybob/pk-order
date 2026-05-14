<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_to_char', connection: 'opencart', incrementing: false, timestamps: false)]
class RelatedoptionsToChar extends OpenCartModel
{
    protected $fillable = [
        'relatedoptions_id',
        'char_id',
    ];

    protected $casts = [
        'relatedoptions_id' => 'integer',
    ];
}
