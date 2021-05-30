<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::all();
        // $posts = Post::get();
        $posts = Post::orderby('id','DESC')->get();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 方法一
        // $post = new Post;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        //方法二
        // $post = new Post;
        // $post->fill([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);
        // $post->save(); 
        //方法三
        // $post = new Post;
        // $post->fill($request->all());
        // $post->save(); 
        
        //方法四
        // Post::create($request->all());

        // $post = new Post;
        // $post->fill($request->all());
        // $post->category_id = $request->category_id;

        // $post->save(); 
        // return redirect()->route('post.index');

        return $request->file('cover')->store('test','public');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        // return $post;
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::get();
        return view('post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        // $post = Post::findOrFail($post->id);
        $post->fill($request->all());
        
        // $post->fill([
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);
        
        // $post->title = $request->title;
        // $post->content = $request->content;
        
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        // $post->delete();

        Post::destroy($post->id);

        return redirect()->route('post.index');
    }
    public function upload(){
        $ext = request()->file('file')->getClientOriginalExtension();
        $img = Str::uuid().'.'.$ext;
        request()->file('file')->storeAs('images',$img,'public');
        return response()->json(['location' => '/storage/images/'.$img]);
    }
}
