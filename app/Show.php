<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    public function season(){
    	return $this->hasMany(Season::class);
    }
}
