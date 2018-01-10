@extends('layouts.layout')

@section('content')
 
<div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12 gutter">
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="map-container"></div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 display-table">
            <div class="undermap-dashboard">
                <div class="row">
                    <div class="col-sm-4 undermapcard">
                        <div class="card">
                            <div class="card-header">Title Here</div>
                            <div id="formatted-address" class="card-body">TEST</div>
                        </div>
                    </div>
                    <div class="col-sm-4 undermapcard">
                        <div class="card">
                            <div class="card-header">Title Here</div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                    <div class="col-sm-4 undermapcard">
                        <div class="card">
                            <div class="card-header">Title Here</div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-sm-4 col-xs-12 gutter">
        <div id="homeCard1" class="card border-primary mb-3">
            <div class="card-header">This</div>
            <div class="card-body text-primary">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div id="homeCard2" class="card border-primary">
            <div class="card-header">This</div>
            <div class="card-body text-primary">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
        

@endsection
