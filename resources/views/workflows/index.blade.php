@extends('layouts.layout')

@section('title', '| Workflow Timelines')

@section('WorkflowCss')
  <link href="{{ asset('/css/timeline.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="ui grid">
  <div class="three wide column"></div>
    {{--  Workflow timeline view  --}}
    <div class="ten wide column">
        <div class="ui two column grid">   
          <div class="column">
            <h1 class="header">
              @guest
                Welcome to the Timelines
              @endguest
              @auth
                Welcome to the Workflow Timelines, {{ Auth::user()->name }}
              @endauth  
            </h1>
          </div>
          <div class="column">
              @include('includes.workflowBtn')
          </div>
        </div>

        @if( count($posts) > 0 )
          @foreach($posts as $post)
          <div class="column workflows-card-column">
            <div class="ui raised link card">
            <div class="content">
              <div class="header">{{$post->title}}</div>
              <div class="meta">
                <span class="category">{{$post->created_at}}</span>
              </div>
              <div class="description">
                <p class="post-body">{!! $post->body !!}</p>
              </div>
            </div>
            <div class="extra content">
              <div class="right floated author">
                <i class="user outline"></i>
                <p>{{$post->user->name}}</p>
              </div>
            </div>
            </div>
          </div>
          @endforeach
        @else 
            <h3>No Post Found! </h3>
        @endif
        {{ $posts->links() }}
        
    </div>
  <div class="three wide column"></div>
</div>



@endsection