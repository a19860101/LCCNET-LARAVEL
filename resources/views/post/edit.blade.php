@extends("template.master")
@section("main")
<div class="row justify-content-center">
    <div class="col-lg-8 col-10">
        <h1>編輯文章</h1>
    </div>
    <div class="col-lg-8 col-10">
        <form action="{{route('post.update',['post'=>$post->id])}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="" class="form-label">文章標題</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">文章分類</label>
                <select name="category_id" id="" class="form-select">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}} / {{$category->slug}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">內文</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
            </div>
            <input type="submit" value="編輯文章" class="btn btn-primary"> 
            <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
        </form>
    </div>
</div>
@endsection