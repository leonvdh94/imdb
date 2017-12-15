<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public function movie(){
		return $this->belongsTo(Movie::class);
	} 
	public function show(){
		return $this->belongsTo(Show::class);
	}
	public function user(){
		return $this->belongsTo(User::class);
	}
}

