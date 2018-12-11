@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Statistics</h1>
            <hr></hr>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
            <h3>PHP Framework Popularities</h3>        
            <div id="geo-map-chart" class="card">
                    <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1280_RC06/embed_loader.js"></script>
                    <script type="text/javascript">
                    trends.embed.renderExploreWidget("GEO_MAP", {"comparisonItem":[{"keyword":"laravel","geo":"","time":"today 12-m"},{"keyword":"Symfony","geo":"","time":"today 12-m"},{"keyword":"/m/02qgdkj","geo":"","time":"today 12-m"},{"keyword":"CakePHP","geo":"","time":"today 12-m"},{"keyword":"Zend","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=laravel,Symfony,%2Fm%2F02qgdkj,CakePHP,Zend&date=today 12-m,today 12-m,today 12-m,today 12-m,today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});
                    </script>
                
            </div>
            <div class="card">
            
                <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1280_RC06/embed_loader.js"></script>
                <script type="text/javascript">
                    trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"laravel","geo":"","time":"today 12-m"},{"keyword":"Symfony","geo":"","time":"today 12-m"},{"keyword":"/m/02qgdkj","geo":"","time":"today 12-m"},{"keyword":"CakePHP","geo":"","time":"today 12-m"},{"keyword":"Zend","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=laravel,Symfony,%2Fm%2F02qgdkj,CakePHP,Zend&date=today 12-m,today 12-m,today 12-m,today 12-m,today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});
                </script>
                
            </div>
            <div class="card">
                
                    <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1280_RC06/embed_loader.js"></script>
                    <script type="text/javascript">
                        trends.embed.renderExploreWidget("GEO_MAP_0", {"comparisonItem":[{"keyword":"laravel","geo":"","time":"today 12-m"},{"keyword":"Symfony","geo":"","time":"today 12-m"},{"keyword":"/m/02qgdkj","geo":"","time":"today 12-m"},{"keyword":"CakePHP","geo":"","time":"today 12-m"},{"keyword":"Zend","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=laravel,Symfony,%2Fm%2F02qgdkj,CakePHP,Zend&date=today 12-m,today 12-m,today 12-m,today 12-m,today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});
                    </script>
            
            </div>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                <h3>Amazon and Alibaba Expansion Area </h3>
                <div class="card">
                        <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1308_RC02/embed_loader.js"></script>
                        <script type="text/javascript">
                        trends.embed.renderExploreWidget("GEO_MAP", {"comparisonItem":[{"keyword":"/m/0mgkg","geo":"","time":"2004-01-01 2018-02-12"},{"keyword":"/m/07s6ctl","geo":"","time":"2004-01-01 2018-02-12"}],"category":0,"property":""}, {"exploreQuery":"date=all&q=%2Fm%2F0mgkg,%2Fm%2F07s6ctl","guestPath":"https://trends.google.com:443/trends/embed/"});
                        </script>
                    
                </div>
                <div class="card">
                        <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1308_RC02/embed_loader.js"></script>
                        <script type="text/javascript">
                          trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"/m/0mgkg","geo":"","time":"2004-01-01 2018-02-12"},{"keyword":"/m/07s6ctl","geo":"","time":"2004-01-01 2018-02-12"}],"category":0,"property":""}, {"exploreQuery":"date=all&q=%2Fm%2F0mgkg,%2Fm%2F07s6ctl","guestPath":"https://trends.google.com:443/trends/embed/"});
                        </script>
                      
                </div>
        </div>
    </div>
</div>

<!-- This code below for the table -->
<div class="row">
        <div class="card table-card">
            <table id="tableEq"class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Long</th>
                    <th scope="col">Lat</th>
                    <th scope="col">Mag</th>
                    <th scope="col">Location Name</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>1</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>2</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>3</td>
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

