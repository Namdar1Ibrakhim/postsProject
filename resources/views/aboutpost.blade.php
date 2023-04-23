@extends('block')

@section('content')
    <div style = "width:100%; height:100; display:flex;justify-content:center; flex-direction:column; text-align:center; padding-top:30px;">
        <div style = "margin:auto" >
            @foreach($data as $ele)
                <div class = "alert alert-info" style="width:800px">
                    <h3>Title: {{ $ele->title }}</h3>
                    <img style = "width:200px" src = "{{asset('/storage/' . $ele->image) }}" alt = "">
                    <h6>Body: {{ $ele->body}}</h6>
                </div>
            
            @if(count($com)!=0) 
                <h3>Comments on post</h3>
            @endif

            @foreach($com as $el)
                <div class = "alert alert-success" style="width:800px; display:flex; justify-content:center; flex-direction:column">
                    <h7>{{ $el->body }}</h7>
                    <h8>Author: {{ $el->author }}</h8>
                    <a style = "width:220px; text-align:center; margin:auto;" href = "/editcomment/{{$el->id}}" method = "post" type="submit" class="btn btn-primary" style = "color:white">Редактировать коммент</a>
                    <a style = "width:180px; text-align:center; margin:auto" href = "/deletecomment/{{$el->id}}" method = "post" type="submit" class="btn btn-danger" style = "color:white">Удалить коммент</a>

                </div>
            @endforeach
            <a href = "/home" type="submit" class="btn btn-success" style = "color:white">Назад</a>
            <a href = "/editpost/{{$ele->id}}" method = "post" type="submit" class="btn btn-warning" style = "color:white">Редактировать пост</a>
            <a href = "/deletepost/{{$ele->id}}" methond = "post" type="submit" class="btn btn-danger" style = "color:white">Удалить пост</a>

            @endforeach
        </div>
    </div>

@endsection
