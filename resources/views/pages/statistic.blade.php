@extends('layouts.layout')

@section('content')

<div class="ui grid container">
    <div class="sixteen wide column">    
        <h1>Statistics</h1>
        <div id="geo-map-chart" class="ui link card">
                <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1280_RC06/embed_loader.js"></script>
                <script type="text/javascript">
                  trends.embed.renderExploreWidget("GEO_MAP", {"comparisonItem":[{"keyword":"laravel","geo":"","time":"today 12-m"},{"keyword":"Symfony","geo":"","time":"today 12-m"},{"keyword":"/m/02qgdkj","geo":"","time":"today 12-m"},{"keyword":"CakePHP","geo":"","time":"today 12-m"},{"keyword":"Zend","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=laravel,Symfony,%2Fm%2F02qgdkj,CakePHP,Zend&date=today 12-m,today 12-m,today 12-m,today 12-m,today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});
                </script>
              
        </div>
        <div class="ui stackable two column grid">
            <div class="column">
            
                <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1280_RC06/embed_loader.js"></script>
                <script type="text/javascript">
                    trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"laravel","geo":"","time":"today 12-m"},{"keyword":"Symfony","geo":"","time":"today 12-m"},{"keyword":"/m/02qgdkj","geo":"","time":"today 12-m"},{"keyword":"CakePHP","geo":"","time":"today 12-m"},{"keyword":"Zend","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=laravel,Symfony,%2Fm%2F02qgdkj,CakePHP,Zend&date=today 12-m,today 12-m,today 12-m,today 12-m,today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});
                </script>
               
            </div>
            <div class="column">
                
                    <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1280_RC06/embed_loader.js"></script>
                    <script type="text/javascript">
                        trends.embed.renderExploreWidget("GEO_MAP_0", {"comparisonItem":[{"keyword":"laravel","geo":"","time":"today 12-m"},{"keyword":"Symfony","geo":"","time":"today 12-m"},{"keyword":"/m/02qgdkj","geo":"","time":"today 12-m"},{"keyword":"CakePHP","geo":"","time":"today 12-m"},{"keyword":"Zend","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=laravel,Symfony,%2Fm%2F02qgdkj,CakePHP,Zend&date=today 12-m,today 12-m,today 12-m,today 12-m,today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});
                    </script>
           
            </div>
        </div>
    </div>
</div>
@endsection

