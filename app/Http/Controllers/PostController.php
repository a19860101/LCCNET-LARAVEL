<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    # Query Builder
    //
    function index(){
        $posts = DB::table('posts')->get();
        return view('post.index',compact('posts'));
    }
    function show($id){
        // $posts = DB::table('posts')->where('id',$id)->get();
        // return view('post.show',compact('posts'));

        // $post = DB::table('posts')->where('id',$id)->first();
        $post = DB::table('posts')->find($id);
        return view('post.show',compact('post'));
    }
}
