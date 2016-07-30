<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlStatistic extends Model
{
	protected $fillable = [
		'breed', 'council_name', 'year', 'value'
	];
}
