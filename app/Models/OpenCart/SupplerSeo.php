<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_seo', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerSeo extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'form_id',
        'prod_title',
        'prod_meta_desc',
        'prod_desc',
        'prod_keyword',
        'prod_h1',
        'prod_photo',
        'cat_title',
        'cat_meta_desc',
        'cat_desc',
        'manuf_title',
        'manuf_meta_desc',
        'manuf_desc',
        'seo_1',
        'seo_2',
        'seo_3',
        'seo_4',
        'seo_5',
        'seo_6',
        'seo_7',
        'seo_8',
        'seo_9',
        'seo_10',
        'seo_11',
        'seo_12',
        'seo_13',
        'seo_14',
        'seo_15',
        'seo_16',
        'seo_17',
        'seo_18',
        'seo_19',
        'seo_20',
        'seo_r1',
        'seo_r2',
        'seo_r3',
        'seo_r4',
        'seo_r5',
        'seo_r6',
        'prod_url',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'form_id' => 'integer',
    ];
}
