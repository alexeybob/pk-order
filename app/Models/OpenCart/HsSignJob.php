<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_hs_sign_jobs', connection: 'opencart', primaryKey: 'id', incrementing: true, timestamps: false)]
class HsSignJob extends OpenCartModel
{
    protected $fillable = [
        'id',
        'created_at',
        'status',
        'profile1',
        'pg',
        'thumbprint',
        'product_document_json',
        'kiz_ids_json',
        'status_list_json',
        'locked_at',
        'locked_by',
        'result_json',
        'error_text',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
