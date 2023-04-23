@extends('block')

@section('content')
    <h1>Комментировать</h1>
    <form action="/commented/{{$id}}" method="post">
        @csrf

        <div class = "form-group">
            <label for="body">Description</label>
            <input type = "text" name = "body" placeholder="Введите текс комментария" id="body" class="form-control">
        </div>
        <div class = "form-group">
            <label for="author">Description</label>
            <input type = "text" name = "author" placeholder="Автор" id="author" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Залить</button>
    </form>
@endsection
