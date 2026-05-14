<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_suppler_options', connection: 'opencart', primaryKey: 'nom_id', incrementing: true, timestamps: false)]
class SupplerOption extends OpenCartModel
{
    protected $fillable = [
        'nom_id',
        'form_id',
        'option_id',
        'opt',
        'po',
        'ko',
        'pr',
        'we',
        'option_required',
        'art',
        'foto',
        'opt_point',
        'opt_pref',
        'opt_margin',
    ];

    protected $casts = [
        'nom_id' => 'integer',
        'form_id' => 'integer',
        'option_id' => 'integer',
    ];
}
