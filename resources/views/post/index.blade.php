@extends("template.master")
@section("main")
<h1>文章列表</h1>

@foreach($posts as $post)
<div>
    <h2>{{$post->title}}</h2>
    <div>
        {{$post->content}}
    </div>
    <div>
        最後更新時間 {{$post->updated_at}}
    </div>
    <hr>
</div>
@endforeach

@endsection

