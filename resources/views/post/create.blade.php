@extends('layouts.app')
@section('content')
    {!! Form::open([ 'action' => 'PostsController@store', 'method'=>'POST' ]) !!}



        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Create New Post</h3>
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
                                <strong>{{Auth::user()->name}}</strong> <span class="text-muted"><</span>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                        {{Form::label('title','Title')}}
                                        {{Form::text('title','', [ 'class'=>'form-control', 'placeholder'=>'Title' ]) }}
                                </div>
                                <div class="form-group">
                                        {{Form::label('body','Body')}}
                                        {{Form::textarea('body','', ['class'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Place your text here' ]) }}
                                </div>
                                {{Form::submit('Submit', ['class' => 'btn btn-secondary']) }}
                            
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->
                </div>
            <div>
        </div>





    {!! Form::close() !!}
@endsection