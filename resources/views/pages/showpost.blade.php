@extends('layouts.master')

@section('assets')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@section('content')

<div class="container ">
    <ul class="list-group">
        <br>
            <div class="container bg-light text-dark">
                <br>
                <li class="list-group-item active font_dec border_rounded "><strong>{{$post->title}}</strong></li>
                <br/>
                <p class=""> {{$post->body}}</p>    
                <hr >
                <span>created at {{$post->created_at}}</span>
                <br/><br/>                
                <a class="btn btn-primary btnn" href="/post" > back </a> 
            </div> 
            <br/>
             
       
    </ul>
<div>  
    
@endsection    