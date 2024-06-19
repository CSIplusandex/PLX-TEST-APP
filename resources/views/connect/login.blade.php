@extends('connect.master')
@section('content_connect')


<div class="wrapper" style="display: flex; flex-wrap: wrap;">
	<div class="box">
		<div class="in">
			<div class="logo">
				<img src="{{ url('/static/images/logo_64.png') }}">
			</div>
		</div>
	</div>
	<div class="container"style="color: red;text-align: center;margin: 20px;width: auto;">
		<p>¡¡welcome</p>
	</div>
	<div class="container"style="color: red;text-align: center;margin: 20px;width: auto;">
		<p>to</p>
	</div>
	<div class="container"style="color: blue;text-align: center;margin: 20px;width: auto;">
		<p>{{ config('cms.app_name')}}!!</p>
	</div>
</div>
<div class="form mtop16">
	{!! Form::open(array('url' => '/', 'id' => 'form_connect_login')) !!}
	{!! Form::hidden('autocomplete', null, ['class' => 'autocomplete']) !!}
	<label for="email">Correo Electronico</label>
	{!! Form::text('email', null, ['class' => 'disableac']) !!}
	<label for="email">Contraseña</label>
	{!! Form::password('password', null, ['class' => 'disableac']) !!}
	{!! Form::submit('ingresar', ['class' => 'mtop16']) !!}
	{!! Form::close() !!}
</div>
@endsection
