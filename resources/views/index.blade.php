@extends('layouts.master')

@section('content')

<div class="container-fluid text-center  bg-light text-dark p-5">
    <h1>{{$title}}</h1>
    <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
    <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
@endsection
        
        
  