<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="{{asset('js/app.js')}}" defer></script>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">

<!--	<title>Lesson 4 @yield('title')</title> -->
	<title>@section('title') @show</title>
</head>
<body>
<div class="row justify-content-center">
	<div class="class-md-6">
		<div class="header">
		@include('header')
		</div>

		<div class="menu">
			@yield('menu')
		</div>

		<div class="content">
	        @yield('content')
		</div>

		<div class="footer">
			@include('footer')
		</div>
	</div>
</div>
</body>
</html>