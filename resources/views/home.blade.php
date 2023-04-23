@extends('block')

@section('content')
    <div style = "width:100%; height:100; display:flex;justify-content:center; flex-direction: column; text-align:center; padding-top:30px;">
        
        @if(count($data)==0)
            <h3>Нет постов</h3> 
        @else
            <h3>Все посты</h3>  
        @endif
        <div style = "margin:auto;  display:flex;justify-content:center; flex-direction: column;" >
            @foreach($data as $el)
                <div class = "alert alert-info" style="width:800px">
                    <h4>{{ $el->title }}</h4>
                    <!-- <h7>{{$el->body}}</h7> -->
                    <img style = "width:200px" src = "{{asset('/storage/' . $el->image) }}" alt = "">
                    <div style = "padding:10px"><a style = "color:white;" href="/aboutpost/{{$el->id}}" methond = "post"><button class="btn btn-success" style = "color:white">Детальнее</a></div>
                
                    <a style = "color:white;" href="/comment/{{$el->id}}"><button class="btn btn-success">Комментировать</a>
                </div>
            @endforeach
            
        </div>

    </div>



@endsection
