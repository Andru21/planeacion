<?php

namespace Planeacion;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	public function competition(){
		return $this->belongsTo(Competition::class);
	}
}
