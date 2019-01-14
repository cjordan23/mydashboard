@extends('layouts.layout')

@push('pagesJQuery')
<script src="{{ asset('/js/hourPagesJQuery.js') }}"></script>
@endpush

@section('content')
<div class="text-center">
    <h2 class="card-title">Earthquake Past Hour</h2>
    <hr></hr>
</div>

<div class="container-fluid">
    <div class="row">
        <div id="map-container-card" class="card">
            <div id="map-hour-container" class="card-body">
            </div>
        </div>
    </div>
</div>
@endsection

@push('googleMapScripts')
<script src="{{ asset('/js/maps/pasthoursmap.js') }}"></script>
@endpush~

{{--
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-hour-tab" data-toggle="tab" href="#nav-hour" role="tab" aria-controls="nav-home" aria-selected="true">Past-Hour</a>
        <a class="nav-item nav-link" id="nav-significant-tab" data-toggle="tab" href="#nav-significant" role="tab" aria-controls="nav-profile" aria-selected="false">Significant</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
        <a class="nav-item nav-link" id="nav-refresh-tab" data-toggle="tab" href="#nav-refresh" role="tab" aria-controls="nav-refresh" aria-selected="false">Refresh</a>

    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-hour" role="tabpanel" aria-labelledby="nav-home-tab">
            <div id="map-container-card" class="card">
                    <div id="map-hour-container" class="card-body">
                    </div>
                    @push('googleMapScripts')
                    <script src="{{ asset('/js/maps/pasthoursmap.js') }}"></script>
                    @endpush
                   
            </div>  
    </div>
    <div class="tab-pane fade" id="nav-significant" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div id="map-container-card2" class="card">
                    <div id="significant-hour-container" class="card-body">
                    </div>
                    @push('googleMapScripts')
                    <script id="significant-script" src="{{ asset('/js/maps/hour/significant-hour.js') }}"></script>
                    @endpush
            </div>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>
--}}