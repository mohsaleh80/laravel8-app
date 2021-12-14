<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
   public function getAllPosts(){

        //$posts=Post::all();
        $posts=Post::paginate(2);
        return $posts;
   }
}
