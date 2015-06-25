@extends('layouts.main')

@section('content')

@include('partials.header')

<div id="explore">



    <div id="div-left">
        <div id="map_canvas"></div>
    </div>

    <div id="div-right">

        <ul>

            @foreach($posts as $post)

<!--            <li onClick="showImage('{{ $post->art_id }}','{{ $post->image }}')" data-toggle="tooltip" data-placement="left" title='<img src="{{$post->image}}" style="width: 400px; height: auto" />'>{{ $post->loc_name }}</li>-->

            <li onClick="showImage('{{ $post->art_id }}','{{ $post->image }}')" data-toggle="modal" data-target="#myModal" ><img src="{{$post->image}}" /></li>

            @endforeach

        </ul>

    </div>

</div>

<div id="bg_image"></div>
<div id="blackoverlay" ></div>

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

@endsection