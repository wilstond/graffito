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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-dismiss="modal">
<!--    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
    </div>-->
    <div class="modal-body" data-dismiss="modal">

    </div>
<!--    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>-->
</div>

<div id="trending">
    <ul class='row' >
        @foreach($trending as $post)
        <li class="col-md-4 col-sm-12 col-xs-12">
<!--            <a href="#" onClick="showImage('{{ $post->image }}')" ><img src="{{ $post->image }}" class="img-responsive" /></a>-->
            <img src="{{ $post->image }}" onClick="showImage('{{ $post->image }}')" class="img-responsive" data-toggle="modal" data-target="#myModal" />
        </li>
        @endforeach
    </ul>
</div>
@endsection
