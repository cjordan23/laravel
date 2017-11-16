@extends('layouts.app')

@section('content')
    
    <div class="container">



        <div class="left-panel">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12">
                            {{--  <div class="thumbnail">
                                <a href="#"><img src="http://www.istanbluegayrimenkul.com/wp-content/uploads/2014/05/image6.jpg" alt=""/></a>
                            </div>  --}}
                            <div class="icerik-bilgi">

                            
                                <a href="#"><h2>{{$post->title}}</h2></a>
                                <small>Written On {{$post->created_at}}</small>
                                <p>{!! $post->body !!}</p>
                                <div class="btn-group">
                                    <a class="btn btn-social btn-facebook" href="#" data-toggle="tooltip" title="Share Facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-social btn-twitter" href="#" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-social btn-google" href="#" data-toggle="tooltip" title="Share Google"><i class="fa fa-google"></i></a>
                                </div>

                                         

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Secondary, outline button -->
        <button type="button" class="btn btn-outline-primary"><a href="/posts">Back</a></button>
        <button type="button" class="btn btn-info"><a href="/posts/{{$post->id}}/edit">Edit</a></button>
        <!-- This code for delete post -->
        {!! Form::open( ['action' => ['PostsController@destroy', $post->id ] , 'method'=>'POST' , 'class'=>'pull-right']) !!}
            {{Form::hidden('_method' , 'DELETE') }}
            {{Form::submit('Delete This Post', ['class'=>'btn btn-danger']) }}
        {!! Form::close() !!}
    </div>



    
@endsection