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
                        <form>
                              <div class="form-group">
                                    {!! Form::open([ 'action'=>'PostsController@store', 'method'=>'POST' ]) !!}
                                          {{ Form::label('titleWorkflows', 'Tittle : ') }}
                                          {{ Form::text('titleWorkflows','',['class'=>'form-control','placeholder'=>'Title']) }}
                                          {{ Form::label('bodyWorkflows', 'Description : ') }}
                                          {{ Form::textarea('bodyWorkflows', '', ['class'=>'form-control','placeholder'=>'Description'] ) }}
                                          {{ Form::submit('Post it!', ['class'=>'btn btn-primary btn-block','style'=>'margin-top:20px; 
                                          height:50px;']) }}
                                    {!! Form::close() !!}
                              </div>
                        </form>

                  </div>
            </div>
      </div>
@endsection