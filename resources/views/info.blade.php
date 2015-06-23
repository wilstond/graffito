@extends('layouts.main')

@section('content')

@include('partials.header')

<header>
<div id="bg_image"></div>
    <div id="blackoverlay" ></div>
       
    <div id="info" >

        <h1><a href="{{url('explore')}}" >Explore</a></h1>
            <p>Find all the locations of street art in Toronto on our map. Click on the location and browse street art that exists in that location. You can even check out work that has been there before.</p>
            <h1><a href="{{url('/#trending')}}" >Trending</a></h1>
            <p>Check out what is the most popular street art in Toronto. Find out where it is and see it in real life!</p>
<!--            p<>Graffito shares images and locations of 
                street art around the city of Toronto.</p>-->
<h1><a href="{{url('contribute')}}" >Contribute</a></h1>
            <p>Find street art in Toronto, take a picture, upload it and contribute to Graffito – Toronto's street art archive.</p>
<!--            <p>Take the museum experience outdoors, celebrate 
                street art, the artists and remember past works in the city. </p>-->
            
<!--            <p>Explore existing entries, Contribute new ones, and Explore Toronto. </p>-->

            <br />

            
      </div>
        </header>
@endsection


