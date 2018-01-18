@extends('layouts.layout')

@section('content')
  <div id="map-container-card" class="sixteen wide column">
   
      <div id="map-container"></div>
 
  </div>
  <div class="ui stackable three column grid">
    <div class="column">
      <canvas id="myChart"></canvas>
    </div>
    <div class="column">
      <canvas id="chartLine"></canvas>
    </div>
    <div class="column">
      <canvas id="pieChart"></canvas>
    </div>
  </div>
  
@endsection
