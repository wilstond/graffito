<!DOCTYPE html>

<html>
    <head>
        <title>ABC Inc - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    </head>
    <body>
        <a href="{{ url('about') }}">About Us</a>
        |
        <a href="{{ url('contact') }}">Contact Us</a>
        <div>List of products</div>
        <hr/>
        <img src="{{ asset('images/guitar1.png') }}" />
        
        <div>
            @yield('content')
        </div>
        <hr/>
        <div>
            @section('footer') <!-- define a name to this section - this lets you override in the view files -->
            &copy; 2015 ABC Inc
            @show
        </div>
    </body>
</html>
