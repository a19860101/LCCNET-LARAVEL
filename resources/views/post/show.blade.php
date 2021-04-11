@extends('template.master')
@section('main')

@foreach($posts as $post)
<h2>{{$post->title}}</h2>
<div>
    {{$post->content}}
</div>
<div>
    最後更新時間{{$post->updated_at}}
</div>
@endforeach

@endsection