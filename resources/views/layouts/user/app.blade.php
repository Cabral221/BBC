<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- Scripts -->
	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('js/user/jquery-backstretch/jquery.backstretch.min.js')}}"></script>
	<script src="{{ asset('js/user/app.js') }}" defer></script>
	<script src="{{ asset('js/app.js') }}" defer></script>
	
	<!-- Fonts -->
	<link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
	
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/user/style.css') }}" rel="stylesheet">
	
	<title>@yield('title', "BBC SN University")</title>
	
	@include('layouts.user.style')
	
	@yield('css')
</head>
<body>
	<div id="app">
		<div id="bg-header">
			@include('layouts.user.header') 
			@yield('text-header')
		</div>
		
		@yield('content')
		
		@include('layouts.user.footer')
		
		@include('layouts.user.script')
		
	</div>
	@yield('js')
</body>
</html>