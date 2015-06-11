@extends('layouts.main')
@section('content')

<div class="container">
    <div class="container-fluid">

        <br /><br />
        <h1>Contribute to Graffito</h1>

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
    </div><!--end container-fluid div-->
</div> <!--end container div-->

@endsection