@extends('layouts.master')

@section('assets')


  <style>
     
        .border_rounded {
            border-radius: 20px 0px;
            
        }
        .btnn:hover {
            color: blue;
            background-color: white;
            border: 2px solid blue;
        }

        .hr{
            border: 2px solid blue;
            
            
        }
        img {
         float: right;
         width: 50%;
         margin: 0 0px 10px 20px;
            }
  </style>

@endsection


@section('content')

<div class="container ">
    <ul class="list-group">
        <br>
            <div class="container bg-light text-dark">
                <br>
                <li class="list-group-item active  border_rounded "><strong>{{$post->title}}</strong></li>
                <br/>
                <p class=""><img src="{{asset('imgs/paris1.jpg')}}"> {{$post->body}}</p>    
                <hr class="hr">
                <span>created at {{$post->created_at}}</span>
                <br/> <br/>              
                <a class="btn btn-primary btnn" href="/post" > back </a>
                <br/> <br/>              
                <a class="btn btn-primary btnn" href="/post/edit/{{$post->id}}" > edit </a>
                <br/> <br/>
            </div> 
            <br/>
             
       
    </ul>
<div>  
    
@endsection    