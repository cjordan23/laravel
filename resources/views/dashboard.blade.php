@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h4>Welcome to your Dashboard</h4>
                </div>

                <div class="panel-body">
                <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/posts/create">Create your post here</a></button>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if( count($posts) > 0 )
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr> 
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                                <td>
                                    <!-- This code for delete post -->
                                    {!! Form::open( ['action' => ['PostsController@destroy', $post->id ] , 'method'=>'POST' , 'class'=>'pull-right']) !!}
                                        {{Form::hidden('_method' , 'DELETE') }}
                                        {{Form::submit('Delete This Post', ['class'=>'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach  
                    </table>
                    @else
                        <h4>You have no posts</h4> 
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
