<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
	//$season->show;
    public function show(){
    	return $this->belongsTo(Show::class);
    }
}
