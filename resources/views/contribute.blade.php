@extends('layouts.main')

@section('content')


<div class="container">
    <div class="container-fluid">

        <br /><br />
        <h1>Contribute to Graffito</h1>


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

                     {!! Form::file('Image') !!}

                </div>

                 <div class='form-group'>
<!--                     {!! Form::submit('Contribute', ['class' => 'btn btn-primary']) !!}-->
                        {!! Form::submit(null, ['id' => 'upload_submit','class' => 'btn btn-primary'])!!}
                 </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
            @endforeach
        @endif 

         {!! Form::close() !!}
    </div><!--end container-fluid div-->
</div> <!--end container div-->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/contribute.js') }}"></script>
@endsection


         {!! Form::close() !!}

 @endsection

