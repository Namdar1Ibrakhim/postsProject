@extends('block')

@section('content')
    <h1>Create Post</h1>

    <form action="posted/" method="post" enctype="multipart/form-data">
        @csrf

        <div class = "form-group">
            <label for="title">Title</label>
            <input type = "text" name = "title" placeholder="Введите название поста" id="title" class="form-control">
        </div>
        <div class = "form-group">
            <label for="body">Description</label>
            <input type = "text" name = "body" placeholder="Введите текс поста" id="body" class="form-control">
        </div>
        <div class = "form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Залить</button>
    </form>
@endsection
