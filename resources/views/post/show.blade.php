@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row showContainer">
            <div class="col-md-12">
                <h1>{{$post->title}}</h1>
                <p>{{$post->body}}</p>
                <div>
                    <span class="badge badge-success">Posted {{$post->created_at}}</span>
                    <div class="pull-right hashtag">
                        <span class="label">alice</span> 
                        <span class="label">story</span>
                        <span class="label">blog</span>
                        <span class="label">personal</span>
                    </div>
                </div> 
                <hr>
                
                </div>     
                <hr>
            </div>
        </div>

        <!-- Secondary, outline button -->
        <button type="button" class="btn btn-outline-primary"><a href="/posts">Back</a></button>

              
        @if( !Auth::guest() )
            @if(Auth::user()->id == $post->userID)
            <button type="button" class="btn btn-info"><a href="/posts/{{$post->id}}/edit">Edit</a></button>
            <!-- This code for delete post -->
            {!! Form::open( ['action' => ['PostsController@destroy', $post->id ] , 'method'=>'POST' , 'class'=>'pull-right']) !!}
                {{Form::hidden('_method' , 'DELETE') }}
                {{Form::submit('Delete This Post', ['class'=>'btn btn-danger']) }}
            {!! Form::close() !!}
            @endif
        @endif

    </div>

    
@endsection