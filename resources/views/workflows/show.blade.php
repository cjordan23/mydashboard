@extends('layouts.layout')

@section('WorkflowCss')
  <link href="{{ asset('/css/timeline.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
  <div class="row no-gutters">
    {{--  Workflow timeline view  --}}
    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
      @include('includes.workflowBtn')
      <div class="page-header">
        <h1 id="timeline"> {{ Auth::user()->name }} ! This is your timeline </h1>
      </div>
      @if( count($workflows) > 0 )
        @foreach( $workflows as $workflow )
          <ul class="timeline">
              <li>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">{{$workflow->titleWorkflows}}</h4>
                  </div>
                  <div class="timeline-body">
                    <p>{{$workflow->bodyWorkflows}}</p>
                    <p>
                        <small class="text-muted">
                          <i class="glyphicon glyphicon-time">
                          </i>Posted on {{$workflow->created_at}}
                        </small>
                    </p>
                  </div>
                </div>
              </li>
          </ul>
        @endforeach
      @else 
          <h3>No Post Found! </h3>
      @endif

    </div>
  </div>
</div>
      
@endsection
