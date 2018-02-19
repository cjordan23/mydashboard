@extends('layouts.layout')

@section('content')
<script>
    var  src='https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson';
    console.log(src);
</script>

<div class="container-fluid">
    <div class="row">
            <div id="map-container-card" class="card">
                  
                <div class="card-body">
                    <div id="map-container"></div>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="card table-card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Long</th>
                    <th scope="col">Lat</th>
                    <th scope="col">Location Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
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
