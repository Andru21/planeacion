<?php

namespace Planeacion;

use Illuminate\Database\Eloquent\Model;

class Program_transversal extends Model
{
    public function program(){
    	return $this->belongsTo(Program::class);
    }
    public function transversal(){
    	return $this->belongsTo(Transversal::class);
    }
}
