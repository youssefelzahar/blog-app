<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $allPosts=[
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],

            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],

            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],

        ];
        return view("posts.index",['posts'=>$allPosts]);
    }
}
