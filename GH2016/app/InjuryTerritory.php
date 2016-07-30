<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InjuryTerritory extends Model
{
    protected $fillable = [
		'year', 'territory_name', 'number'
	];
}
