<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Lesson 6')</title>
</head>
<body>
	<div class="header">
		@include('header')
	</div>

	<div class="content">
		<h1>Новость {{$in}} в деталях</h1>

		<h2>Как это было ...</h2>

	@php
	/*dd($news);*/
	@endphp

	@foreach($news as $id => $item)
            @if ($id == $in)
            <div>
            <p>{{$item['title']}}</p>
            <p>{{$item['info']}}</p>
            </div>
        	@endif
    @endforeach

	</div>

	<div class="footer">
		@include('footer')
	</div>

</body>
</html>