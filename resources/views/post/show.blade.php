@extends('template.master')
@section('main')
<div class="row justify-content-center">
    <div class="col-lg-8 col-10 border p-5 rounded bg-light">
        <h1>{{$post->title}}</h1>
        <div class="my-3">
            {!! $post->content !!}
        </div>
        <div class="my-3">
            最後更新時間{{$post->updated_at}}
        </div>
        <a href="{{route('post.index')}}" class="btn btn-success">文章列表</a>
        <a href="{{route('post.edit',['post'=>$post->id])}}" class="btn btn-info">編輯</a>
        <form action="{{route('post.destroy',['post'=>$post->id])}}" method="post" class="d-inline-block">
            @csrf
            @method('delete')
            <input type="submit" value="刪除" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection