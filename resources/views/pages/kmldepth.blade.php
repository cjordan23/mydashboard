@extends('layouts.layout')

@section('content')
<div class="text-center">
    <h2 class="card-title">Animated KML Map</h2>
    <hr></hr>
</div>
<div class="container-fluid">
    <div class="row">
        <div id="map-container-card" class="card">
            <div id="map-kml" class="card-body">
            </div>
        </div>
    </div>
</div>
<div id="jumbo" class="jumbotron jumbotron-fuild">
</div>    
@endsection

@push('googleMapScripts')
<script src="{{ asset('/js/maps/kml/earthquakekml.js') }}"></script>
@endpush