<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" media="all">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/page.css') }}" media="all">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/admin.css') }}" media="all">
	<link href="https://fonts.googleapis.com/css2?family=Ribeye&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	@yield('wrapper')
<script type="text/javascript" src="{{ url('/js/index.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/jquery.js') }}"></script>
</body>
</html>