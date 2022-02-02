<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Lesson 5')</title>
</head>
<body>
	<div class="header">
		@include('header')
	</div>

	<div class="content">
		<h1>Новости в категории</h1>
		<img src='../img/{{$id}}.png'></img><br>
		<h2>Нажмите на ссылку для просмотра новости.</h2>


	@php
	//dd($ic);
	//dump($news);
	@endphp

    @foreach($news as $item)
		<div>
            <a href='/news/info/{{$item->id}}'>
            {{$item->title}}
            </a>
            <p>{{$item->info}}</p>
        </div>
    @endforeach

	</div>

	<div class="footer">
		@include('footer')
	</div>

</body>
</html>