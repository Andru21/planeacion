<?php

namespace Planeacion;

use Illuminate\Database\Eloquent\Model;

class Transversal extends Model
{
    public function program(){
    	return $this->belongsToMany(Program::class, 'program_transversals');
    }
}
