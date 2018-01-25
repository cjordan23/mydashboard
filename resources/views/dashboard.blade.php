@extends('layouts.layout')

@section('content')
  <div id="map-container-card" class="ui black segment sixteen wide column">
   
      <div id="map-container"></div>
 
  </div>
  <div class="ui stackable three column grid">
    <div class="column">
      <div class="ui red segment">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <div class="column">
      <div class="ui red segment">
        <canvas id="chartLine"></canvas>
      </div>
    </div>
    <div class="column">
      <div class="ui red segment">
        <canvas id="pieChart"></canvas>
      </div>
    </div>
  </div>
  
@endsection
