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
    @yield('WorkflowCss')
    @yield('stylingandreference')

    <!--Semantic UI -->    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>  
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>    
    <!--=== Axios ===-->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

   
</head>
<body id="app" class="home">    
    <div class="wrapper">
        
        @include('includes.navbartop')
        
        <div id="main-container">
            @include('includes.message')
            @yield('content')
        </div>
        
        @include('includes.footer')
      
    
    </div>
    
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!--=== ADD ===-->
    <script src="{{ asset('js/mainjQuery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
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

    <!-- Chartjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <!-- Semantic UI -->
   

    <!--=== BOOTSTRAP ===-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- ===== GOOGLE MAPS ==== -->
   
    <script src="{{ asset('/js/maps/googlemap.js') }}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlMIVnxAhJgv8bi-lT5FjGpX6VTonZsAs&callback=initMap">
    </script>


</body>
</html>