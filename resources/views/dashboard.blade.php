@extends('layouts.layout')

@section('content')
    <div id="map-container-card" class="card">
            <img src="{{ asset('/images/open-iconic-master/svg/chevron-top.svg') }}" alt="hide-map" style="width:20px; height:20px;">
            <img src="{{ asset('/images/open-iconic-master/svg/chevron-bottom.svg') }}" alt="show-map"  style="width:20px; height:20px;"> 
        <div class="card-body">
            
            <div id="map-container"></div>
        </div>
    </div>
    <div class="ui stackable three column grid">
        <div class="container-card">
            <canvas id="myChart"></canvas>
        </div>
        <div class="container-card">
            <canvas id="chartLine"></canvas>
        </div>
        <div class="container-card">
            <canvas id="pieChart"></canvas>
        </div>
    </div>
  
@endsection
