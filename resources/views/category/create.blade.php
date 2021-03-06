@extends('template.master')
@section('main')
<div>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div>
            <label for="">分類標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">分類英文標題</label>
            <input type="text" name="slug">
        </div>
        <input type="submit" value="新增標題">
    </form>
</div>
<div>
    <ul>
        @foreach($categories as $category)
        <li>
            {{$category->title}} / {{$category->slug}}
            <form action="{{route('category.destroy',['category'=>$category->id])}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
            </form>
        </li>
        @endforeach
    </ul>

</div>
@endsection