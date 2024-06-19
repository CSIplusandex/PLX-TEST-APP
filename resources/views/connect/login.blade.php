@extends('connect.master')
@section('content_connect')

<div class="wrapper" style="display: flex; flex-wrap: wrap;">
	<div class="box">
		<div class="in">
			<div class="logo container">
				<img src="{{ url('/static/images/logo_64.png') }}" height="100">
			</div>
		</div>
	</div>
</div>
<div class="container"><p>¡¡Bienvenido a {{ config('cms.app_name')}}!!</p></div>
<div class="form mtop16">
	{!! Form::open(array('url' => '/', 'id' => 'form_connect_login')) !!}
	{!! Form::hidden('autocomplete', null, ['class' => 'autocomplete']) !!}
	<label for="email">Correo Electronico</label>
	{!! Form::text('email', null, ['class' => 'disableac']) !!}
	<label for="email">Contraseña</label>
	{!! Form::password('password', null, ['class' => 'disableac']) !!}
	{!! Form::submit('Ingresar', ['class' => 'mtop16']) !!}
	{!! Form::close() !!}
</div>
@endsection
