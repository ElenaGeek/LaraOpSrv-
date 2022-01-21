<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Lesson 3')</title>
</head>
<body>
	<div class="header">
		@include('header')
	</div>

	<div class="content">
		<h1>Новости в категории</h1>
		<img src='../img/{{$ic}}.png'></img><br>
		<h2>Нажмите на ссылку для просмотра новости.</h2>

	@php
	/*dd($ic);*/
	@endphp

	@foreach($news as $id => $item)
		<div>
            <a href='/news/info/{{$id}}'>
            {{$item['title']}}
            </a>
            <p>{{$item['info']}}</p>
        </div>
    @endforeach

	</div>

	<div class="footer">
		@include('footer')
	</div>

</body>
</html>