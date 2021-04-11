<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function index(){
        return view('post.index');
    }
    function create(){
        return view('post.create');
    }
    function edit(){
        return view('post.edit');
    }
    function store(Request $request){
        DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)',[
            $request->title,
            $request->content,
            now(),
            now()
        ]);
        return 'success';
    }
}
