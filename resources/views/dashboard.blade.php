@extends('layouts.layout')

@push('googleMapScripts')
   <script src="{{ asset('/js/maps/googlemap.js') }}"></script>
@endpush

@section('content')
<div class="container-fluid">
    <div id="card-dashboard" class="row">
        <div class="col-sm-3 home-card">
            <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Earthquake Past Hour</h5>
                <p class="card-text">Map showing Earthquake happening during past few hour. Data update every 5 minutes. </p>
                <a href="/hourmap" class="btn btn-primary btn-block">Go to Map</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3 home-card">
            <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Earthquake Past Today</h5>
                <p class="card-text">Map showing Earthquake happening during past today. Data update every 5 minutes. </p>
                <a href="/daymap" class="btn btn-primary btn-block">Go to Map</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3 home-card">
            <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Earthquake Past Week</h5>
                <p class="card-text">Map showing Earthquake happening during past seven days or week. Data update every 5 minutes. </p>
                <a href="/weekmap" class="btn btn-primary btn-block">Go to Map</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3 home-card">
            <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Earthquake this Month</h5>
                <p class="card-text">This map will show all significant Earthquake during past 30 days. Data update every 5 minutes.</p>
                <a href="/monthmap" class="btn btn-primary btn-block">Go to Map</a>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <h2 class="card-title">Earthquake Past Today</h2>
    <hr></hr>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div id="map-container-card" class="card">
                <div id="map-day-container" class="card-body">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div id="showData" class="card-body">
                    <h4 id="showLocation" class="card-title">Location</h4>
                    <p class="card-text">Some example text. Some example text.</p>
                    <a class="card-link">Magnitude : </a>
                    <a id="showMag" class="card-link">Mag</a>
                    <a class="card-link">Magnitude Type : </a>
                    <a id="showMagType" class="card-link">Mag Type</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
