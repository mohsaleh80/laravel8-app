@extends('layouts.master')

@section('content')

<div class="container ">
    <ul class="list-group">

            <div class="container bg-info text-dark">
                <li class="list-group-item active"><strong>{{$post->title}}</strong></li>
                <br/>
                <p> {{$post->body}}</p>    
                <hr >
                <span>created at {{$post->created_at}}</span>
                <br/><br/>                
                
            </div> 
            <br/>
            <a class="btn btn-primary" href="/post" > back </a> 
       
    </ul>
<div>  
    
@endsection    