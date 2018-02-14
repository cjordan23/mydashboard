@extends('layouts.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
            <div id="map-container-card" class="card">
                    <img src="{{ asset('/images/open-iconic-master/svg/chevron-top.svg') }}" alt="hide-map" style="width:20px; height:20px;">
                    <img src="{{ asset('/images/open-iconic-master/svg/chevron-bottom.svg') }}" alt="show-map"  style="width:20px; height:20px;"> 
                <div class="card-body">
                    <div id="map-container"></div>
                </div>
            </div>
    </div>
    <div class="row">

        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card">
                    <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card">
                    <canvas id="chartLine"></canvas>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card">
                    <canvas id="pieChart"></canvas>
            </div>
        </div>
               
    </div>
</div>
  
@endsection
