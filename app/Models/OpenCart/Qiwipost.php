<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_qiwipost', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class Qiwipost extends OpenCartModel
{
    protected $fillable = [
        'id',
        'city_id',
        'qpname',
    ];

    protected $casts = [
        'id' => 'integer',
        'city_id' => 'integer',
    ];
}
