<?php

namespace Planeacion;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function competition(){
    	return $this->belongsToMany(Competition::class, 'competition_programs');
    }
    public function transversal(){
    	return $this->belongsToMany(Competition::class, 'program_transversals');
    }
}
