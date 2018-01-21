<div class="form-group">
	{!! Form::label('address', 'Direccion del sitio') !!}
	{!! Form::text('address', null, ['class' => 'form-control','required' => 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('latitude', 'Latitud del sitio') !!}
	{!! Form::text('latitude', null, ['class' => 'form-control','required' => 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('longitude', 'Longitud del sitio') !!}
	{!! Form::text('longitude', null, ['class' => 'form-control','required' => 'required']) !!}
</div>
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>