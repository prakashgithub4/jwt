<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;
use File;
class Postcontroller extends Controller
{
    public function addpost(Request $request)
    {
      
      $validation = Validator::make($request->all(),[
         'title'=>'required',
         'desciption'=>'required',
         'photos'    =>'required'
      ]);
      
      if ($validation->fails()) {
            return response()->json(['error'=>$validation->errors()],400);
        }
       else{

       $data['title'] = $request->input('title');
       $data['description'] = $request->input('desciption');
      
       if ($request->hasFile('photos')) {
        
        $image = $request->file('photos');
        $data['name'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('Images/');
      
        $image->move($destinationPath,$data['name']);
        }
        $post  = new Post;
        $post->title= $data['title'];
        $post->description = $data['description'];
        $post->image = $data['name'];
        $post->save();
   
        return response()->json(["msg"=>"post added successfully","status"=>true],201);

       }
      

    }
    public function allpost()
    {
       
	    $allpost = Post::allPosts();
	    if($allpost){

	    	 return response()->json(["msg"=>"post fetch successfully","status"=>true,"data"=>$allpost],200);
	    }
	    else{
	    	 return response()->json(["msg"=>"data not exsists","status"=>false,"data"=>[]],400);
	    }
       
        	
    }
    public function deletePost(Request $request)
    {
      
        $id = $request->post("id");
     
        if(!empty($id)){

        	$post = Post::find($id);
        	$destinationPath = public_path('Images');
            File::delete($destinationPath.'/'.$post['image']);
        	$post->delete();
        	return response()->json(["msg"=>"Record deleted successfully","status"=>true,"data"=>[]],200);
        }
        else{
        	 return response()->json(["msg"=>"id not exsists","status"=>false,"data"=>[]],404);
        }
        


    }



   public function editpost(Request $request)
    {
      
       $id  = $request->input('id');
       if($id){
       $data['title'] = $request->input('title');
       $data['description'] = $request->input('desciption');
       $data['name'] = '';
       if ($request->hasFile('photos')) {
        
        $image = $request->file('photos');
        $data['name'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('Images/');
        $image->move($destinationPath,$data['name']);
        }

        $post  =  Post::find($id);
	        if($data['name']!="")
	        {   
	        	$destinationPath = public_path('Images');
                File::delete($destinationPath.'/'.$post['image']);
	        }
       
	        $post->title= $data['title'];
	        $post->description =$data['description'];
	        $post->image = $data['name'];
	        $post->save();
        return response()->json(["msg"=>"post updated successfully","status"=>true],200);

       }
       else{
       	 return response()->json(["msg"=>"Id not found","status"=>false],404);
       }
     
    }
    public function details($id=""){
    	if($id!=""){
    		 
    		 if($post = Post::find($id)){
    		 	 return response()->json(["msg"=>"post fetch successfully","status"=>true,'data'=>$post],200);
    		 }
    		 else{
    		 	 return response()->json(["msg"=>"id not found","status"=>false],404);
    		 }
    		
    	}
    	else{
           return response()->json(["msg"=>"id is empty","status"=>false],404);
    	}
    	

    }
  
}
