<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GoogleMap @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" rel="stylesheet" crossorigin="anonymous">
    @yield('WorkflowCss')

    <!--=== Axios ===-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
    <!--=== Char.js ===-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
</head>
<body id="app" class="home">
    
    @include('includes.navbartop')
    
    <div class="container-fluid display-table">
        <div class="row display-table-row no-gutters">
            <div id="navigation" class="col-xl-1 col-md-2 hidden-sm hidden-xs hidden-xs-down display-table-cell v-align box">
                @include('includes.leftsidebar')
            </div>
            <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12 offset-xl-1 offset-md-2 offset-sm-1 main-content">
                <div class="user-dashboard">
                    @include('includes.message')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!--=== ADD ===-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/navbarTop.js') }}"></script>
    <script src="{{ asset('/js/dashboard.js') }}"></script>
    <script>       
        geocode();
        function geocode(){
            var location = 'Jalan Budi Raya No.21'
            axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
                params:{
                    address:'location',
                    key:'AIzaSyDlMIVnxAhJgv8bi-lT5FjGpX6VTonZsAs'

                }
            })
            .then(function(response){
                console.log(response);
                //Formatted Address
                var formattedAddress = response.data.results[0].formatted_address;
                var formattedAddressOutput = `
                    <ul class="list-item">
                        <li class="list-group-item">${formattedAddress}</li>
                    </ul>
                `;

                //Output to apps
                document.getElementById('formatted-address').innerHTML = formattedAddressOutput;    
            })
            .catch(function(error){
                console.log(error);
            })
        }    
    </script>


    <!--=== Chartjs ===-->
    <script src="{{ asset('/js/chart/myChart.js') }}"></script>
    <script src="{{ asset('/js/chart/statisticChart.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    
    <!--=== BOOTSTRAP ===-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- ===== GOOGLE MAPS ==== -->
    <script src="{{ asset('/js/map/gmap.js') }}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlMIVnxAhJgv8bi-lT5FjGpX6VTonZsAs&callback=initMap">
    </script>

     <script src="{{ asset('/js/map/adminRegisMap.js') }}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlMIVnxAhJgv8bi-lT5FjGpX6VTonZsAs&callback=initMap">
    </script>
</body>
</html>