@extends('layouts.layout')

@section('title', '| Edit Post')

@section('stylingandreference')
      @include('includes.tinymceditor')
@endsection

@section('content')
<div class="row">
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="workflow-page-header">
                              @guest
                              Hello !
                              @endguest
                              @auth
                              Welcome , {{ Auth::user()->name }}
                              @endauth
                        </p>            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                              @include('includes.workflowBtn')
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-12">                             
                                    <div class="card post-edit-card">
                                          {{--  Post Form  --}}
                                          {!! Form::open([ 'action'=>[ 'PostsController@update', $posts->id ] , 'method'=>'POST' ]) !!}
                                          <form>
                                                <div class="form-group">
                                                {{ Form::label('title', 'Tittle : ') }}
                                                {{ Form::text('title', $posts->title ,['class'=>'form-control','placeholder'=>'Title']) }}
                                                </div>      
                                                {{ Form::label('body', 'Description : ') }}
                                                {{ Form::textarea('body', $posts->body , ['id'=>'mytextarea','class'=>'form-control','placeholder'=>'Description', 'style'=>'height:400px'] ) }}
                                                {{ Form::hidden('_method','PUT')}}
                                                {{ Form::submit('Update', ['class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px; height:50px;']) }}
                                          </form>
                                                {{ csrf_field() }}
                                          {!! Form::close() !!}
                                    </div>
                  
                        </div>
                  </div>
            </div>
            <div class="col-lg-2 col-md-2"></div>
</div>
@endsection