<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        $allPosts=Post::all();
       
        return view("posts.index",['posts'=>$allPosts]);
    }

    public function show(Post $post){//type hinting
        //first return first element select * frim db where id=postid limit 1
        //find return model object
        //get select * form db where title
       // $singlePosstDB=Post::where('id',$postid)->first();
       //$singlePostDb=Post::findOrFail($postid);
       //if(is_null($singlePostDb)){
        //return to_route('posts.index');
      // }


        return view("posts.show",["post"=>$post]);
    }

    public function create(){
        $users=User::all();
            return view("posts.create",["users"=>$users]);
    }
    public function store(){
        // to validate
        request()->validate(
            [
                "title"=> ["required",'min:3'],
                "description"=>["required",'min:10'],
                "post_creator"=>["required","exists:users,id"],
            ]
            );
        //get user data
        $data=request()->all();
        $title=request()->title;
        $description=request()->description;
        $postCreator=request()->post_creator;
       // dd($data);
        //store the user in DB
        //  $post=new Post();
        //  $post->title=$title;
        //  $post->description=$description;
          //$post->postCreator  
          Post::create(["title"=>$title,"description"=>$description,"user_id"=> $postCreator]);
          //$post->save()
        //redirection to post page
      return to_route('posts.index');
    }
    public function edit(Post $post){
        //redirection to post page
        $users=User::all();

        return view('posts.edit',['post'=>$post,'users'=>$users]);
       
    }

    public function update($postid){
        $updatedata=request()->all();
        //dd($updatedata);
        //store the user in DB
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

//        dd($title, $description, $postCreator);

        //2- update the submitted data in database
            //select or find the post
            //update the post data
        $singlePostFromDB = Post::find($postid);
        $singlePostFromDB->update([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator,
        ]);
        //dd($singlePostFromDB);
        //redirection to post page
      return to_route('posts.show',$postid);
    }
    public function destroy($postid){

        //$data->destroy;    
        $post=Post::find($postid);
        $post->delete();    
        return to_route('posts.index');

    }
}
