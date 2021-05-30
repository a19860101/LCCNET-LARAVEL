@extends("template.master")
@section("main")
<div class="row justify-content-center">
    <div class="col-lg-8 col-10">
        <h1>文章列表</h1>
    </div>
    @foreach($posts as $post)
    <div class="col-lg-8 col-10 border border-secondary rounded p-5 my-3">
        <div>
            <h2>{{$post->title}}</h2>
            <div>
                分類 <span  class="badge bg-secondary">{{$post->category->title}}</span>
            </div>
            <div class="my-3">
                {{$post->content}}
            </div>
            <div class="text-end">
                <a href="{{route('post.show',['post'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
            </div>
            <div>
                最後更新時間 {{$post->updated_at}}
            </div>
        </div>
    </div>
    @endforeach
</div>




@endsection

