<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{route('post.index')}}">文章列表</a>
        <a href="{{route('post.create')}}">新增文章</a>
    </nav>
    @yield("main")
    @yield("sidebar")
</body>
</html>