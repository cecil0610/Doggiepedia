<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InjuryAge extends Model
{
	protected $fillable = [
		'year', 'age_group', 'number'
	];
}
