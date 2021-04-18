<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function index(){
        $posts = DB::select('SELECT * FROM posts');

        // return view('post.index',['posts'=>$posts]);
        // return view('post.index')->with(['posts'=>$posts]);
        // return view('post.index')->with('posts',$posts);
        return view('post.index',compact('posts'));
    }
    function show($id){
        $posts = DB::select('SELECT * FROM posts WHERE id = ?',[
            $id 
        ]);
        return view('post.show',compact('posts'));
    }
    function create(){
        return view('post.create');
    }
    function edit($id){
        $posts = DB::select('SELECT * FROM posts WHERE id = ?',[
            $id 
        ]);
        return view('post.edit',compact('posts'));
    }
    function store(Request $request){
        DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)',[
            $request->title,
            $request->content,
            now(),
            now()
        ]);

        return redirect()->route('post.index');
    }
    function delete(Request $request){
        // return $request->id;
        DB::delete('DELETE FROM posts WHERE id = ?',[$request->id]);

        return redirect()->route('post.index');
    }
    function update(Request $request){
        DB::update('UPDATE posts SET title=?,content=?,updated_at=? WHERE id=?',[
            $request->title,
            $request->content,
            now(),
            $request->id
        ]);
        return redirect()->route('post.index');
    }
}
