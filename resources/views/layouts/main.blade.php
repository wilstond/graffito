<!DOCTYPE html>

<html>
    <head>
        <title>Graffito</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{!! csrf_token() !!}">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" >
        <!-- Latest compiled and minified JavaScript -->
<!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet" >
        <link href="{{ asset('css/menu.css') }}" type="text/css" rel="stylesheet" >
        <link href="{{ asset('css/map.css') }}" type="text/css" rel="stylesheet" >    
        <link href="{{ asset('css/header.css') }}" type="text/css" rel="stylesheet" >
        <link href="{{ asset('css/modal.css') }}" type="text/css" rel="stylesheet" >
        <link href="{{ asset('css/explore.css') }}" type="text/css" rel="stylesheet" >
        
<link href='http://fonts.googleapis.com/css?family=Raleway:400' rel='stylesheet' type='text/css'> 


    </head>
    <body>
        

        <div id="wrapper" class="toggled">
        <a href="#menu-toggle" class='hamburg' id="menu-toggle"><img src='{{ asset('images/hamburger.svg') }}'</a> 
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="{{url("/")}}">
                            Graffito 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/#trending')}}">Trending</a>
                    </li>
                    <li>
                        <a href="{{url('explore')}}">Explore</a>
                    </li>
                    <li>
                        <a href="{{url('contribute')}}">Contribute</a>
                    </li>
                
                    <li>

                        <a href="{{url('info')}}">Info</a>
                    </li>
                    <li>
                        <a href="{{url('auth/login')}}">Admin Login</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('js/jquery.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
<!--        <script src="js/bootstrap.min.js"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
        </script>
  <!--GOOGLE MAP--> 
   <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
   <script src="{{asset('js/map.js')}}"></script>
   <script src="{{asset('js/modal.js') }}"></script>
   <script src="{{asset('js/contribute.js')}}"></script>
   <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
