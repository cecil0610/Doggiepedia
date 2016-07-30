<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    	'title', 'description', 'recommendation'
    ];
	
	public function suggestions() {
		return $this->hasMany(Suggestion::class);
	}
}
