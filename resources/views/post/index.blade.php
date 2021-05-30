@extends("template.master")
@section("main")
<style>
    .cover {
        width: 100%;
        height: 300px;
    }
    .cover img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
</style>
<div class="row justify-content-center">
    <div class="col-lg-8 col-10">
        <h1>文章列表</h1>
    </div>
    @foreach($posts as $post)
    <div class="col-lg-8 col-10 border border-secondary rounded p-5 my-3">
        <div>
            <h2>{{$post->title}}</h2>
            <div class="cover">
                @if($post->cover)
                <img src="{{asset('storage/images/'.$post->cover)}}" alt="">
                @else
                <img src="{{asset('storage/images/question-marks.jpg')}}" alt="">
                @endif
            </div>
            <div>
                分類 <span  class="badge bg-secondary">{{$post->category->title}}</span>
            </div>
            <div class="my-3">
                {{ Str::limit(strip_tags($post->content),200) }}
            </div>
            <div class="text-end">
                <a href="{{route('post.show',['post'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
            </div>
            <div>
                建立時間 {{$post->created_at}}
                <hr>
                <?php Carbon\Carbon::setLocale('zh_TW'); ?>
                最後更新時間 {{ Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}

            </div>
        </div>
    </div>
    @endforeach
</div>




@endsection

