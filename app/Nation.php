<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    protected $fillable = [
        'ruler_id', 'land_id', 'ruler_name', 'state_name', 'nation_religion', 'nation_flag', 'nation_summary', 'nation_slogan', 'nation_colors', 'tax_rate', 'war_prefrence'
    ];
    public function land()
    {
    	return $this->hasOne('App\Land');
    }
}
