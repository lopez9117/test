<div class="form-group">
	{!! Form::label('address', 'Direccion del sitio') !!}
	{!! Form::text('address', null, ['class' => 'form-control','required' => 'required']) !!}
	{!! $errors->first('address','<span class="error">:message</span>') !!}
</div>
<div class="form-group">
	{!! Form::label('latitude', 'Latitud del sitio') !!}
	{!! Form::text('latitude', null, ['class' => 'form-control','required' => 'required']) !!}
	{!! $errors->first('latitude','<span class="error">:message</span>') !!}
</div>
<div class="form-group">
	{!! Form::label('longitude', 'Longitud del sitio') !!}
	{!! Form::text('longitude', null, ['class' => 'form-control','required' => 'required']) !!}
	{!! $errors->first('longitude','<span class="error">:message</span>') !!}
</div>	
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>