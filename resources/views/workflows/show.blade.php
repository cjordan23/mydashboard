@extends('layouts.layout')

@section('title', '| Your posts')

@section('WorkflowCss')
  <link href="{{ asset('/css/timeline.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="ui grid">
  <div class="three wide column"></div>
  <div class="ten wide column">
    {{--  Workflow timeline view  --}}
      <div class="ui two column grid">   
        <div class="column">
          <h1 class="header">All your posts is here, {{ Auth::user()->name }}  </h1>
        </div>
        <div class="column">@include('includes.workflowBtn')</div>
      </div>

      @if(count($posts)> 0 )
        @foreach( $posts as $post )
        <div class="column post-column">
            <div class="ui padded blue segment post-container">
              <div class="ui two column grid">
                  <div class="column">
                      <h3 class="ui dividing header">{{$post->title}}</h3>
                  </div>
                  <div class="ui right aligned column">
                        <i class="wait icon"></i>{{$post->created_at}}
                  </div>
                </div>
              <div class="column post-body">
                {!! $post->body !!}
              </div>
              <div class="ui two column grid">
                  <div class="column">
                      <a href="/workflows/showpost/{{ $post->id }}" class="ui primary basic button">Read More</a>
                  </div>
                  <div class="ui right aligned column">
                      <div class="ui buttons">

                        {!! Form::open(['action' => ['PostsController@destroy', $post->id] , 'method'=>'POST', 'class'=>'ui red button'])  !!}  
                        <I class="erase icon"></i>
                          {{ Form::hidden('_method', 'DELETE') }}
                          {{ Form::submit('Delete') }}
                        {!! Form::close() !!}
                        <a href="/workflows/{{$post->id}}/edit" class="ui positive button"><i class="edit icon"></i>Edit</a>

                      </div>
                  </div>
              </div>
            </div>
        </div>       
        @endforeach
      @else 
        <h3>No Post Found! </h3>
      @endif
      
  </div>
  <div class="three wide column"></div>
</div>
      
@endsection
