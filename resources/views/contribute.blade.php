@extends('layouts.main')

@section('content')

<header>
 <div id="bg_image"></div>
             <div id="blackoverlay" ></div>
</header>


<div class="container">
    <div class="container-fluid">
        
       

        <br /><br />
        <h1>Contribute to Graffito</h1>


@section('content')

@include('partials.header')

<main>
    <div id="bg_image"></div>
    <div id="blackoverlay" ></div>
    <div id="info" >
        <h1>Contribute to Graffito</h1>

        {!! Form::open(['route' => 'posts.store', 'files' => true])!!} 

                <div class='form-group'>

                     {!! Form::label('location', 'Location: ') !!}
                     {!! Form::text('location', null,['class' => 'form-control', 'id' => 'location' ,'placeholder' => 'Geolocation loading...']) !!} 

                </div>

                 <div class='form-group'>

                     {!! Form::label('image', 'Image: ') !!}
                     
                     {!! Form::file('Image', array('onchange' => 'readURL(this);')) !!}
                     <img src="" id="screenshot" class="img-responsive" />
                        <script type="text/javascript">
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('#screenshot').attr('src', e.target.result).css(
                                    {
                                        'height' : '380'
                                    });
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        </script>

                </div>

                 <div class='form-group'>
                     {!! Form::submit('Contribute', ['class' => 'btn btn-primary']) !!}
                 </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
            @endforeach
        @endif 

         {!! Form::close() !!}
</div>
         </main>

  
    </div><!--end container-fluid div-->
</div> <!--end container div-->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/contribute.js') }}"></script>
<script>
    var autocomplete;
    function initialize(){
        alert("hi");
    }

</script>
@endsection


         {!! Form::close() !!}

 @endsection

