@extends('template.master')
@section('main')

<h2>{{$post->title}}</h2>
<div>
    {{$post->content}}
</div>
<div>
    最後更新時間{{$post->updated_at}}
</div>
<form action="{{route('post.delete',['id'=>$post->id])}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="刪除">
</form>
<a href="{{route('post.edit',['id'=>$post->id])}}">編輯</a>

@endsection