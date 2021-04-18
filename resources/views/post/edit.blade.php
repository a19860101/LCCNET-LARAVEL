@extends("template.master")
@section("main")
<h1>編輯文章</h1>
@foreach($posts as $post)
<form action="{{route('post.update',['id'=>$post->id])}}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="">文章標題</label>
        <input type="text" name="title" value="{{$post->title}}">
    </div>
    <div>
        <label for="">內文</label>
        <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
    </div>
    <input type="submit" value="編輯文章 "> 
</form>
@endforeach
@endsection