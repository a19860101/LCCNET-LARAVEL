@extends("template.master")
@section("main")
<h1>文章列表</h1>

@foreach($posts as $post)
<div>
    <h2>{{$post->title}}</h2>
    <div>
        {{$post->category->title}}
    </div>
    <div>
        {{$post->content}}
        <a href="{{route('post.show',['post'=>$post->id])}}">繼續閱讀</a>
    </div>
    <div>
        最後更新時間 {{$post->updated_at}}
    </div>
    <hr>
</div>
@endforeach

@endsection

