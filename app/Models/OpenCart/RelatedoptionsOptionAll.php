<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_relatedoptions_option_all', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class RelatedoptionsOptionAll extends OpenCartModel
{
    protected $fillable = [
        'id',
        'relatedoptions_id',
        'option_id',
        'text',
    ];

    protected $casts = [
        'id' => 'integer',
        'relatedoptions_id' => 'integer',
        'option_id' => 'integer',
    ];
}
