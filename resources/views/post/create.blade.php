@extends("template.master")
@section("main")
<h1>新增文章</h1>
<form action="{{route('post.store')}}" method="post">
    @csrf
    <div>
        <label for="">文章標題</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="">文章分類</label>
        <select name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->title}} / {{$category->slug}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="">內文</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="新增文章 "> 
</form>
@endsection