@extends('layouts.main')
<<<<<<< HEAD
@section('content')

<div class="container">
    <div class="container-fluid">

        <br /><br />
        <h1>Contribute to Graffito</h1>
=======

@section('content')

        <h1>Contribute to GraffiTO</h1>

        <!-- {!! Form::open(['url' => 'upload', 'method'=>'POST', 'files'=>true]) !!}-->

        <!-- <p>{!! $errors->first('image')!!}</p>
                @if(Session::has('error'))
                <p class="errors">{!! Session::get('error') !!}</p>
                @endif-->
>>>>>>> master

        {!! Form::open(['route' => 'posts.store', 'files' => true])!!} 

                <div class='form-group'>

                     {!! Form::label('location', 'Location: ') !!}
                     {!! Form::text('location', null, ['class' => 'form-control']) !!} 

                </div>

                 <div class='form-group'>

<<<<<<< HEAD
                     {!! Form::label('Image', 'Image: ') !!}
=======
                     {!! Form::label('image', 'Image: ') !!}
>>>>>>> master
                     {!! Form::file('Image') !!}

                </div>

                 <div class='form-group'>
                     {!! Form::submit('Contribute', ['class' => 'btn btn-primary']) !!}
                 </div>
<<<<<<< HEAD
        @if($errors->any())
            @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
            @endforeach
        @endif 

         {!! Form::close() !!}
    </div><!--end container-fluid div-->
</div> <!--end container div-->

@endsection
=======

         {!! Form::close() !!}

 @endsection
>>>>>>> master
