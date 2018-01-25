@extends('layouts.layout')

@section('content')

<div class="ui grid">
      <div class="three wide column"></div>
      <div class="ten wide column">
        {{--  Workflow timeline view  --}}
          <div class="ui two column grid">   
            <div class="column">
              <h1 class="header">Hi there!, {{ Auth::user()->name }}  </h1>
            </div>
            <div class="column">
                @include('includes.workflowBtn')
            </div>
          </div>

                <div class="column post-column">
                    <div class="ui padded red segment post-container">
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
                      <!--
                      <div class="ui two column grid">
                          <div class="column"></div>
                          <div class="ui right aligned column">
                              <div class="ui buttons">
                                <button class="ui negative button"><i class="erase icon"></i>Delete</button>
                                <div class="or"></div>
                                <button class="ui positive button"><i class="edit icon"></i>Edit</button>
                              </div>
                          </div>
                        </div>
                        -->
                    </div>
                </div>       

         
      </div>
      <div class="three wide column"></div>
</div>
          

@endsection