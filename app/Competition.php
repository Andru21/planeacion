<?php

namespace Planeacion;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    public function program(){
    	return $this->belongsToMany(Program::class, 'competition_programs');
    }

    public function result(){
    	return $this->hasMany(Result::class);
    }
}

