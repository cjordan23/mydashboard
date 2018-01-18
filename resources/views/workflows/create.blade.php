@extends('layouts.layout')

@section('title', '| Create Post')

@section('content')
      <div class="container-fluid">                             
            <div class="row">
                  {{--  Post Form  --}}
                  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 gutter">
                        <div class="alert alert-secondary" role="alert">
                              <h3>Create Your Post</h3>
                        </div>
                        {!! Form::open([ 'action'=>'PostsController@store', 'method'=>'POST' ]) !!}
                        <form>
                              <div class="form-group">
                                  
                                          {{ Form::label('title', 'Tittle : ') }}
                                          {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title']) }}
                                          {{ Form::label('body', 'Description : ') }}
                                          {{ Form::textarea('body', '', ['class'=>'form-control','placeholder'=>'Description'] ) }}
                                          {{ Form::submit('Post it!', ['class'=>'btn btn-primary btn-block','style'=>'margin-top:20px; height:50px;']) }}
                                          
                              </div>
                        </form>
                              {{ csrf_field() }}
                        {!! Form::close() !!}

                  </div>
            </div>
      </div>
@endsection