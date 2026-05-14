<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_ym_mapping_manafactures', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class YmMappingManafacture extends OpenCartModel
{
    protected $fillable = [
        'id',
        'manufacturer_id',
        'business_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'manufacturer_id' => 'integer',
        'business_id' => 'integer',
    ];
}
