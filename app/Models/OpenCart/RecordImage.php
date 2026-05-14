<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_image', connection: 'opencart', primaryKey: 'record_image_id', incrementing: true, timestamps: false)]
class RecordImage extends OpenCartModel
{
    protected $fillable = [
        'record_image_id',
        'record_id',
        'image',
        'options',
        'sort_order',
    ];

    protected $casts = [
        'record_image_id' => 'integer',
        'record_id' => 'integer',
        'sort_order' => 'integer',
    ];
}
