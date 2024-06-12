<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="x-AU-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<title>{{ config('cms.app_name')}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-toke" content="{{ csrf_token() }}">
	<meta name="routeName" content="{{ Route::currentRouteName() }}">
	<meta name="SubRouteName" content="@yield('subRouter')">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ url('/static/css/core.css?v='.time()) }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/static/css/single_page.css?v='.time()) }}">
</head>
<body>
	<div class="wrapper">
		@section('content')
		@show 
	</div>
</body>
</html>