<!DOCTYPE html>

<html>
    <head>
        <title>Graffito</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
<!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/admin.css') }}" type="text/css" rel="stylesheet" >
        <link href="{{ asset('css/menu.css') }}" type="text/css" rel="stylesheet" >
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    </head>
    <body>

        <div id="wrapper" class="toggled">
            <a href="#menu-toggle" class='hamburg' id="menu-toggle"><img src='{{ asset('images/hamburger.svg') }}'</a> 
            <!-- Sidebar -->
            <div id="sidebar-wrapper">

                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="{{url("admin")}}">
                            Graffito Admin
                        </a>
                    </li>
                    <li>
                        <a href="auth/logout">Logout</a>
                    </li>
<!--                    <li>
                        <a href="#">Contribute</a>
                    </li>
                    <li>
                        <a href="#">Tour</a>
                    </li>
                    <li>
                        <a href="#">Info</a>
                    </li>-->


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

    </body>
</html>
