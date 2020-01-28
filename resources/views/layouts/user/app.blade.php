<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- Scripts -->
	{{-- <script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('js/user/jquery-backstretch/jquery.backstretch.min.js')}}"></script>
	<script src="{{ asset('js/user/app.js') }}" defer></script>
	<script src="{{ asset('js/app.js') }}" defer></script> --}}
	
	
	
	
	<link rel="shortcut icon" href="{{ asset('assets/img/ico/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/ico/apple-touch-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/ico/apple-touch-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/ico/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/img/ico/apple-touch-icon-57x57.png') }}">
	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/user/style.css') }}" rel="stylesheet">
	
	<!-- Custom Fonts -->
	{{-- <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"> --}}
	<link href="{{ asset('assets/css/pe-icons.css') }}" rel="stylesheet">
	
	
	
	
	
	<!-- Fonts -->
	<link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
	
	<!-- Styles -->
	{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	
	
	<title>@yield('title', "BBC SN University")</title>
	
	@include('layouts.user.style')
	@mapstyles
	@yield('css')
</head>
<body>
	<div id="app">
		{{-- <div class="preloader">
			<div class="preloader-img">
				<span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading"/></span>
			</div>
		</div> --}}
		
		@include('layouts.user.header')
		
		@yield('text-header')
		
		
		@yield('content')
		
		@include('layouts.user.footer')
		
		@include('layouts.user.script')
		
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	{{-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> --}}
	<script src="{{ asset('assets/js/init.js') }}"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
		
	
	@yield('js')
	@include('flashy::message')
	@mapscripts
</body>
</html>