@extends('block')

@section('content')
    <h1>Update Post</h1>

    <form action="{{route('contact-update-submit', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class = "form-group">
            <label for="title">Title</label>
            <input type = "text" value = "{{$data->title}}" name = "title" placeholder="Введите название поста" id="title" class="form-control">
        </div>
        <div class = "form-group">
            <label for="body">Description</label>
            <input type = "text" value = "{{$data->body}}" name = "body" placeholder="Введите текс поста" id="body" class="form-control">
        </div>
        <div class = "form-group">
            <label for="image">Image</label>
            <input type="file" value = "{{$data->image}}" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
