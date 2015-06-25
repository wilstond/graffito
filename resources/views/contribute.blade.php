@extends('layouts.main')

@section('content')

@include('partials.header')


        <h1>Contribute to Graffito</h1>

           <!--{!! Form::open(['url' => 'contribute', 'files' => true])!!}--> 
            {!! Form::open([null ,'id'=>'upload_form', 'files'=>true])!!}

                <div class='form-group'>

                     {!! Form::label('location', 'Location: ') !!}
                     {!! Form::text('location', null,['class' => 'form-control', 'id' => 'location' ,'placeholder' => 'Geolocation loading...']) !!} 

                </div>

                 <div class='form-group'>

                     {!! Form::label('image', 'Image: ') !!}

                     {!! Form::file('Image', ['id' => 'image']) !!}

                </div>

                 <div class='form-group'>
<!--                     {!! Form::submit('Contribute', ['class' => 'btn btn-primary']) !!}-->
                        {!! Form::submit('Contribute', ['id' => 'upload_submit','class' => 'btn btn-primary'])!!}
                 </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
            @endforeach
        @endif 

         {!! Form::close() !!}

    @stop


