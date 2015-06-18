@extends('layouts.main')

@section('content')
<header>
    <div id="bg_image"></div>
    <div id="blackoverlay" ></div>
    
    <div id="logo">
        <img src="{{ asset('images/graffito_logo.svg') }}" alt="Graffito" />
    </div>
    
    <div id="description" >
    <h1>Toronto's street art, archived.</h1>
    </div>
</header>

<div id="modalwindow"></div>

<div id="trending">
    <ul class='row' >
        @foreach($trending as $post)
        <li class="col-md-4 col-sm-12 col-xs-12">
            <a href="#" onClick="showImage('{{ $post->image }}')" ><img src="{{ $post->image }}" class="img-responsive" /></a>
        </li>
        @endforeach
<!--        <li class="col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>         
        <li class="col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>
        <li class="col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>
        <li class="col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>         
        <li class="col-md-4 col-sm-12 col-xs-12"><img src="{{ asset('images/graffiti/test.jpg') }}" class="img-responsive" /></li>    -->
    </ul>
</div>
@endsection
