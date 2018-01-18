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
        <h1 id="timeline">All your posts is here, {{ Auth::user()->name }}  </h1>
      </div>

      @if( count($posts) > 0 )
          <ul class="timeline">
              @foreach( $posts as $post )
               
                <li>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">{{$post->title}}</h4>
                    </div>
                    <div class="timeline-body">
                      <p>{!! $post->body !!}</p>
                      <p>
                          <small class="text-muted">
                            <i class="glyphicon glyphicon-time">
                            </i>Posted on {{$post->created_at}}
                          </small>
                      </p>
                    </div>
                  </div>
                </li>
               
                <!--
                <li class="timeline-inverted">
                    <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                      </div>
                      <div class="timeline-body">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
                      </div>
                    </div>
                </li>
                -->
              @endforeach
          </ul> 
      @else 
          <h3>No Post Found! </h3>
      @endif

    </div>
  </div>
</div>
      
@endsection
