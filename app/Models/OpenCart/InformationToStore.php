<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_information_to_store', connection: 'opencart', primaryKey: 'information_id', incrementing: false, timestamps: false)]
class InformationToStore extends OpenCartModel
{
    protected $fillable = [
        'information_id',
        'store_id',
    ];

    protected $casts = [
        'information_id' => 'integer',
        'store_id' => 'integer',
    ];
}
