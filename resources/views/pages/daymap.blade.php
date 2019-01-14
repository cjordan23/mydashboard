@extends('layouts.layout')
@section('content')
<div class="text-center">
   <h2 class="card-title">Todays Earthquake</h2>
   <hr></hr>
</div>
<div class="container-fluid">
   <div class="row">
      <div id="map-container-card" class="card">
         <div id="map-day-container" class="card-body">
         </div>
      </div>
   </div>
</div>
    
@endsection
@push('googleMapScripts')
<script src="{{ asset('/js/maps/pastdaymap.js') }}"></script>
@endpush