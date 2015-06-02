@extends('layouts.main')

@section('title', 'About Us')
@section('content')

    <div>About Us</div>
    
    <p>Some content</p>
    
    <!-- Display the value passed from controller -->
    <!-- One way -->
    <h1>
        <?php 
        //echo $name
        ?>
    </h1>
    
    <!-- OR -->
    
<!--    <h1>{{ $name }}</h1>-->
    
    <!-- Can add a check -->
    @if(isset($name))
        <h1>{{ $name }}</h1>
    @endif
    
    @if(isset($age))
        <h1>{{ $age }}</h1>
    @endif
    
    
    <!-- Include the partial -->
    @include('partials.firstpartial')    
    
    @section('footer') <!-- this overrides the section footer in the template file -->
    about - footer
    <br/>
    @parent <!-- Displays footer from template file -->
    @stop

@stop