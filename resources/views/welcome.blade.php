<!--<html>
        <head>
                <title>Laravel</title>
                
                <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

                <style>
                        body {
                                margin: 0;
                                padding: 0;
                                width: 100%;
                                height: 100%;
                                color: #B0BEC5;
                                display: table;
                                font-weight: 100;
                                font-family: 'Lato';
                        }

                        .container {
                                text-align: center;
                                display: table-cell;
                                vertical-align: middle;
                        }

                        .content {
                                text-align: center;
                                display: inline-block;
                        }

                        .title {
                                font-size: 96px;
                                margin-bottom: 40px;
                        }

                        .quote {
                                font-size: 24px;
                        }
                </style>
        </head>
        <body>
                <div class="container">
                        <div class="content">
                                <div class="title">Laravel 5</div>
                                <div class="quote">{{ Inspiring::quote() }}</div>
                        </div>
                </div>
        </body>
</html>-->


@extends('layouts.main')

@section('content')
<header>
    <div id="bg_image">

    </div>
    <div id="logo">
        <img src="{{ asset('images/graffito_logo.svg') }}" alt="Graffito" />
    </div>
</header>

<div class='container-fluid' >
    <ul class='row' >
        <li class=" col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>
        <li class=" col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>         
        <li class=" col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>
        <li class=" col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>
        <li class=" col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>
        
    </ul>
</div>
@endsection
