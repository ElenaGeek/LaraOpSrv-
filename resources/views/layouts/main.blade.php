<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="{{asset('js/app.js')}}" defer></script>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

<!--	<title>Lesson 8 @yield('title')</title> -->
	<title>@section('title') Lesson 8 @show</title>
</head>
<body>

<!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">-->
<div class="row justify-content-center">
	<div class="class-md-6">

		<div class="header">
		@include('blocks.header')
		<br>
		@include('blocks.menu')
		</div>

		<div class="content">
	        @yield('content')
		</div>

		<div class="footer">
			@include('blocks.footer')
		</div>
	</div>

</div>
</body>
</html>