@extends('layouts.main')

@section('content')

<header>
    <div id="bg_image"></div>
    <div id="blackoverlay" ></div>
</header>

@include('partials.header')

<main>
    <div id="info" >
        <h1>Contribute</h1>

        {!! Form::open(['url' => 'contribute', 'files' => true])!!} 
        <!--            {!! Form::open([null ,'id'=>'upload_form', 'files'=>true])!!}-->

        <div class='form-group'>

            {!! Form::label('location', 'Location: ') !!}
            {!! Form::text('location', null,['class' => 'form-control', 'id' => 'location' ,'placeholder' => 'Geolocation loading...']) !!} 

        </div>

        <div class='form-group'>

            {!! Form::label('image', 'Image: ') !!}

            {!! Form::file('Image', array('onchange' => 'readURL(this);')) !!}

        </div>

        <div class='form-group'>
            <!--                     {!! Form::submit('Contribute', ['class' => 'btn btn-primary']) !!}-->
            {!! Form::submit('Contribute', ['id' => 'upload_submit','class' => 'btn btn-primary'])!!}
        </div>
        
        <div class="form-group">
            <img src="" id="screenshot" class="img-responsive" />
            <script type="text/javascript">
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#screenshot').attr('src', e.target.result).css(
                                    {
                                        'height': '380'
                                    });
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
        </div>

        @if($errors->any())
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        @endif 

        {!! Form::close() !!}
    </div>
</main>


<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/contribute.js') }}"></script>
<script>
                            var autocomplete;
                            function initialize() {
                                alert("hi");
                            }

</script>
@endsection


@stop


