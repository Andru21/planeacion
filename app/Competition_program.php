<?php

namespace Planeacion;

use Illuminate\Database\Eloquent\Model;

class Competition_program extends Model
{
    public function program(){
    	return $this->belongsTo(Program::class);
    }
    public function competition(){
    	return $this->belongsTo(Competition::class);
    }
}
