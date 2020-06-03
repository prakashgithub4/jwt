<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';
    protected $fillable = ['title', 'description', 'image'];
    public $timestamp;


    public static function allPosts(){
         $resultArray  = [];
    	$post = Post::select("*")
    	              ->get();
    	 $posts = $post->toArray();
    	 for($i=0;$i<count($posts);$i++){
    	 $resultArray[$i]['id']= $posts[$i]['id'];
    	 $resultArray[$i]['title']= $posts[$i]['title'];
    	 $resultArray[$i]['description']= $posts[$i]['description'];
    	 $resultArray[$i]['image']= "http://localhost/apiAuth/public/Images/".$posts[$i]['image'];
    	 }
    	
    	 return $resultArray;


      
    }
    
}
