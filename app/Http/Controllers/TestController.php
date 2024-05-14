<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction(){
        $allPosts=[
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],

            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],

            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],
            ['id'=>'1','title'=>'news','PostedBy'=>'Ahmed','Created_at'=>'12/12/2020'],

        ];
        return view("test",['posts'=>$allPosts]);
    }
}
