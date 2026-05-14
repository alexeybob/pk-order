<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_csvprice_pro_crontab', connection: 'opencart', primaryKey: 'job_id', incrementing: true, timestamps: false)]
class CsvpriceProCrontab extends OpenCartModel
{
    protected $fillable = [
        'job_id',
        'profile_id',
        'job_key',
        'job_type',
        'job_file_location',
        'job_time_start',
        'job_offline',
        'job_data',
        'status',
        'serialized',
    ];

    protected $casts = [
        'job_id' => 'integer',
        'profile_id' => 'integer',
        'job_offline' => 'boolean',
        'status' => 'boolean',
        'serialized' => 'boolean',
    ];
}
