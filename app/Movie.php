<?php

namespace App;

use App\Comment;
use app\Movie;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
   public function comment(){
   	return $this->hasMany(Comment::class);
   }
}
