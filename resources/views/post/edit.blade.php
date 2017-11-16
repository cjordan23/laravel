@extends('layouts.app')

@section('content')

    {!! Form::open([ 'action' => [ 'PostsController@update', $post->id ] , 'method'=>'POST' ]) !!}



        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Edit Post</h3>
                </div><!-- /col-sm-12 -->
            </div><!-- /row -->
            <div class="row">
                    <div class="col-sm-1">
                        <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-1 -->

                    <div class="col-sm-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>myusername</strong> <span class="text-muted"><</span>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                        {{Form::label('title','Title')}}
                                        {{Form::text('title', $post->title , [ 'class'=>'form-control', 'placeholder'=>'Title' ]) }}
                                </div>
                                <div class="form-group">
                                        {{Form::label('body','Body')}}
                                        {{Form::textarea('body',$post->body, ['id'=>'article-ckeditor', 'class'=>'form-control' , 'placeholder'=>'Body Text' ]) }}
                                </div>

                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit  ('Submit', ['class' => 'btn btn-secondary']) }}
                            
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->
                </div>
            <div>
        </div>
    {!! Form::close() !!}

@endsection