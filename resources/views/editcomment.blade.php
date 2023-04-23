@extends('block')

@section('content')
    <h1>Update Post</h1>

    <form action="{{route('comment-update-submit', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class = "form-group">
            <label for="body">Description</label>
            <input type = "text" value = "{{$data->body}}" name = "body" placeholder="Введите текс комментария" id="body" class="form-control">
        </div>
        <div class = "form-group">
            <label for="author">Description</label>
            <input type = "text" value = "{{$data->author}}" name = "author" placeholder="Автор" id="author" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
