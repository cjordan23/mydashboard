@extends('layouts.layout')

@section('title', '| Create Post')

@section('stylingandreference')
      @include('includes.tinymceditor')
@endsection

@section('content')
<div class="ui grid">
      <div class="two wide column"></div>
      <div class="twelve wide column">
            <div class="ui two column grid">   
                  <div class="column">
                        <h1 class="header">Create your posts here, {{ Auth::user()->name }}  </h1>
                  </div>
                  <div class="column">
                        @include('includes.workflowBtn')
                  </div>
            </div>
            <div class="ui container">                             
                  <div class="ui form create-post-container">
                        {{--  Post Form  --}}
                        {!! Form::open([ 'action'=>'PostsController@store', 'method'=>'POST' ]) !!}
                        <form>
                              <div class="ui large form">
                              {{ Form::label('title', 'Tittle : ') }}
                              {{ Form::text('title','',['class'=>'field','placeholder'=>'Title']) }}
                              </div>      
                              {{ Form::label('body', 'Description : ') }}
                              {{ Form::textarea('body', '', ['id'=>'mytextarea','class'=>'form-control','placeholder'=>'Description', 'style'=>'height:400px'] ) }}
                              {{ Form::submit('Post it!', ['class'=>'fluid ui blue button', 'style'=>'margin-top:20px; height:50px;']) }}

                        </form>
                              {{ csrf_field() }}
                        {!! Form::close() !!}
                  </div>

            </div>
      </div>
      <div class="two wide column"></div>
</div>
@endsection