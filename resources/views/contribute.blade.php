@extends('layouts.main')

@section('content')

        <h1>Contribute to GraffiTO</h1>

        <!-- {!! Form::open(['url' => 'upload', 'method'=>'POST', 'files'=>true]) !!}-->

        <!-- <p>{!! $errors->first('image')!!}</p>
                @if(Session::has('error'))
                <p class="errors">{!! Session::get('error') !!}</p>
                @endif-->

        {!! Form::open(['route' => 'posts.store', 'files' => true])!!} 

                <div class='form-group'>

                     {!! Form::label('location', 'Location: ') !!}
                     {!! Form::text('location', null, ['class' => 'form-control']) !!} 

                </div>

                 <div class='form-group'>

                     {!! Form::label('image', 'Image: ') !!}
                     {!! Form::file('Image') !!}

                </div>

                 <div class='form-group'>
                     {!! Form::submit('Contribute', ['class' => 'btn btn-primary']) !!}
                 </div>

         {!! Form::close() !!}

 @endsection