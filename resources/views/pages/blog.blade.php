@extends('layouts.master')

@section('content')
<div class="container">
    <h1>{{$title}}</h1>
</div>    


    @if(count($posts) > 0)
    <div class="container ">
        <ul class="list-group">
            @foreach($posts as $post)
                <div class="container bg-info text-dark">
                    <li class="list-group-item active"><strong>{{$post->title}}</strong></li>
                    <br/>
                    <p> {{$post->body}}</p> 
                    <a href="">read mored...</a>
                    <br/>
                    <span>created at {{$post->created_at}}</span>
                    <hr>                  
                    
                </div> 
                <br/><br/>   
            @endforeach
        </ul>
    <div>      
    @endif
    
@endsection