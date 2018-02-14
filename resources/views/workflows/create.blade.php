@extends('layouts.layout')

@section('title', '| Create Post')

@section('stylingandreference')
      @include('includes.tinymceditor')
@endsection

@section('content')
<div class="row">
      <div class="col-lg-2 col-md-2 col-sm-1"></div>
      <div class="col-lg-8 col-md-8 col-sm-10">
            <div class="row">
                  <div class="col-sm-12">
                        <div class="card create-post-card">
                              <h5 class="card-header text-center">Create your post/info/works here</h5>
                              <form class="create-post-user-info">
                                    <div class="form-group row">
                                          <label for="staticEmail" class="col-sm-2 col-form-label">Posting as</label>
                                          <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticName" value="{{ Auth::user()->name }}">
                                          </div>

                                          <label for="staticEmail" class="col-sm-2 col-form-label">Your email</label>
                                          <div class="col-sm-4">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->email }}">
                                          </div>
                                    </div>      
                              </form>
                              <div class="card-body">
                                    {{--  Post Form  --}}
                                    {!! Form::open([ 'action'=>'PostsController@store', 'method'=>'POST' ]) !!}
                                    <form>
                                          <div class="form-group">
                                                {{--  {{ Form::label('title', 'Tittle ', ['class'=>'input-group-text', 'id'=>'inputGroup-sizing-lg']) }}  --}}
                                                {{ Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title', 'aria-describedby'=>'inputGroup-sizing-sm']) }}
                                          </div>

                                          <div class="form-group">      
                                          {{ Form::label('body', 'Description : ') }}
                                          {{ Form::textarea('body', '', ['id'=>'mytextarea','class'=>'form-control','placeholder'=>'Description', 'style'=>'height:400px'] ) }}
                                          {{ Form::submit('Post it!', ['class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px; height:50px;']) }}
                                          </div>
                                    </form>
                                          {{ csrf_field() }}
                                    {!! Form::close() !!}
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-1"></div>
</div>
@endsection
