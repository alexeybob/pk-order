<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_vtb_attribute_settings', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class VtbAttributeSetting extends OpenCartModel
{
    protected $fillable = [
        'id',
        'general_name',
        'name',
        'description',
        'meaning',
        'example',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'status' => 'integer',
    ];
}
