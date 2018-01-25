@extends('layouts.layout')

@section('title', '| Edit Post')

@section('stylingandreference')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
      tinymce.init({ 
            selector:'textarea' 
      });
</script>
@endsection

@section('content')
<div class="ui grid">
      <div class="two wide column"></div>
      <div class="twelve wide column">
            <div class="ui two column grid">   
                  <div class="column">
                        <h1 class="header">Edit your posts here, {{ Auth::user()->name }}  </h1>
                  </div>
                  <div class="column">
                        @include('includes.workflowBtn')
                  </div>
            </div>
            <div class="ui container">                             
                  <div class="ui form create-post-container">
                        {{--  Post Form  --}}
                  {!! Form::open([ 'action'=>[ 'PostsController@update', $posts->id ] , 'method'=>'POST' ]) !!}
                        <form>
                              <div class="ui large form">
                              {{ Form::label('title', 'Tittle : ') }}
                              {{ Form::text('title', $posts->title ,['class'=>'field','placeholder'=>'Title']) }}
                              </div>      
                              {{ Form::label('body', 'Description : ') }}
                              {{ Form::textarea('body', $posts->body , ['id'=>'mytextarea','class'=>'form-control','placeholder'=>'Description', 'style'=>'height:400px'] ) }}
                              {{ Form::hidden('_method','PUT')}}
                              {{ Form::submit('Update', ['class'=>'fluid ui green button','style'=>'margin-top:20px; height:50px;']) }}
                        </form>
                              {{ csrf_field() }}
                        {!! Form::close() !!}
                  </div>

            </div>
      </div>
      <div class="two wide column"></div>
</div>
@endsection