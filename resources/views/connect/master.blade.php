@extends('master_single_page')

@section('content')
	<div class="connect">
		<div class="col">
			<div class="cover">
				<img width='200' src="{{ url('/static/images/connect_splash.jpg') }}" alt="Un gato, no tengo la otra imagen">	
			</div>
		</div>
		<div class="col">
			@section('content_connect')
			@show
		</div>
	</div>
@endsection