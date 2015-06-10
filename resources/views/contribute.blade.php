
CONTRIBUTE

 {!! Form::open(['url' => 'upload', 'method'=>'POST', 'files'=>true]) !!}
 
 
 <p>{!! $errors->first('image')!!}</p>
	@if(Session::has('error'))
	<p class="errors">{!! Session::get('error') !!}</p>
	@endif
 
 
 <div>

     {!! Form::label('Image') !!}
     {!! Form::file('Image') !!}
     
</div>
<div>

     {!! Form::label('Name this location') !!}
     {!! Form::text('Name this location') !!} 
     
</div>

 <div>
     {!! Form::submit('Contribute', array('class'=>'send-btn')) !!}
 </div>

 {!! Form::close() !!}