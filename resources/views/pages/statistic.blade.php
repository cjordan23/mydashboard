@extends('layouts.layout')

@section('content')
    
<h1>Hello</h1>
<div class="row">
    <div class="col-md-11 col-sm-12 col-xs-12 gutter">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">Title Here</div>
                    <div class="card-body">
                        <canvas id="chartLine"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">Title Here</div>
                    <div class="card-body">
                        <canvas id="statisticChart1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">Title Here</div>
                    <div class="card-body">
                        <canvas id="statisticChart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">Title Here</div>
                    <div class="card-body">
                        <canvas id="statisticChart3"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">Title Here</div>
                    <div class="card-body">
                        <canvas id="statisticChart4"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection