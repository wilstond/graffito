
@extends('layouts.main')

@section('content')

@include('partials.header')

<script type="text/javascript">


    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var name = '{{$location}}';
        var image = '{{$filename}}';

        //----------------REVERSE GEOCODE------------------------//
        geocoder = new google.maps.Geocoder();
        geocoder.geocode({'address': name}, function (results, status) {

            if (status === google.maps.GeocoderStatus.OK) {

                var latitude = results[0].geometry.location.lat();
                var longitude = results[0].geometry.location.lng();



                $.ajax({
                    type: "GET",
                    url: "{{url('insertdata')}}",
                    data: {latitude: latitude, longitude: longitude, name: name, image: image},
                    success: function (data)
                    {
                        //alert(data);
                        $('#success-msg h2').text("Congrats !!! Post added successfully");
                    },
                    error: function (data)
                    {
                        //alert("Something went wrong with the database");
                        $('#success-msg h2').text("Something went wrong. Please try again");
                    }
                });


            }
        });
    });


</script>

<main>
    
    <div id="success-msg">
        <h2>Please wait. Post is being uploaded !!!</h2>
        <a href="{{url('contribute')}}" class="btn btn-default">Back</a>
    </div>
    
</main>



@stop







