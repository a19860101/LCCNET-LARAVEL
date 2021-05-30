@extends("template.master")
@section("main")
<div class="row justify-content-center">
    <div class="col-lg-8 col-10">
        <h1>新增文章</h1>
    </div>
    <div class="col-lg-8 col-10">
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">文章標題</label>
                <input type="text" name="title" class="form-control">
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
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="新增文章" class="btn btn-primary"> 
            <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">

        </form>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        language:'zh_TW',
        height: 500,
        plugins: 'lists image imagetools',
        toolbar: 
            'removeformat | image | ' +
            'undo redo | styleselect bullist numlist |bold italic forecolor|'+
            'underline strikethrough | alignleft aligncenter alignright',
        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
            };

            input.click();
        },
    });
</script>
@endsection