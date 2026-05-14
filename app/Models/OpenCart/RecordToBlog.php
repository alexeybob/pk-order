<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_record_to_blog', connection: 'opencart', primaryKey: 'record_id', incrementing: false, timestamps: false)]
class RecordToBlog extends OpenCartModel
{
    protected $fillable = [
        'record_id',
        'blog_id',
    ];

    protected $casts = [
        'record_id' => 'integer',
        'blog_id' => 'integer',
    ];
}
