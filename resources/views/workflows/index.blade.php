@extends('layouts.layout')

@section('title', '| Workflow Timelines')

@section('WorkflowCss')
  <link href="{{ asset('/css/timeline.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row border-info">
  <div class="col-lg-6 col-md-12 col-sm-12">
    <p class="workflow-page-header">
      @guest
      Hello Guest!
      @endguest
      @auth
      Recently Timelines , {{ Auth::user()->name }}
      @endauth
    </p>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12">
    @include('includes.workflowBtn')
  </div>
</div>

<hr></hr>

<div class="row">
  <div class="col-lg-1 col-md-1"></div>
  <div class="col-lg-10 col-md-10 col-sm-12">
    
    <div class="row">
        @if( count($posts) > 0 )
        @foreach($posts as $post)
        <div class="card w-100 post-card">
          <div class="card-body">
            <h2 class="card-title post-title"><strong>{{$post->title}}</strong></h2>
            <p class="card-text post-body">Post by - {{$post->user->name}}</p>
            <hr></hr>
            {!! $post->body !!}
            <p class="card-text post-time"><small class="text-muted">{{$post->created_at}}</small></p>
          </div>
        </div>
        @endforeach
        @else
          <h3>No Post Found! </h3>
        @endif
    </div>
    {{ $posts->links() }}
  </div>
  <div class="col-lg-1 col-md-1"></div>
</div>


@endsection