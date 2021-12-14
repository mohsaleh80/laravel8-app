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
                    <a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#exampleModalCenter{{$post->id}}">
                        modal </a>
                    <a class="btn btn-primary" href="/post/{{$post->id}}" >
                            read more </a>    
                    <hr >
                    <span>created at {{$post->created_at}}</span>
                    <br/><br/>                
                    
                </div> 
                <br/><br/>   
                   <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">{{$post->title}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <li class="list-group-item active"><strong>{{$post->title}}</strong></li>
                                    <br/>
                                    <p> {{$post->body}}</p> 
                                    <hr >
                                    <span>created at {{$post->created_at}}</span>
                                                   
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               
                                </div>
                            </div>
                            </div>
                        </div>
            @endforeach
        </ul>
    <div>  
       
    <div class="panel pull-right "> {{ $posts->links() }}</div>
    <br><br>
    @else 
    <p>no posts found</p>
    @endif

    
@endsection