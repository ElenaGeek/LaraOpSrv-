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
		<h1>Категории новостей</h1>
		<h2>Приветствуем на странице категорий новостей. Для просмотра новостей выберите категорию и пройдите по ссылке.</h2>

	@php
	/*dd($news);*/
	@endphp

	@forelse($news as $id => $item)
		<div>
            <img src='img/{{$id}}.png'></img><br>
            <a href='/news/{{$id}}'>
            {{$item['title']}}

            </a>
        </div>
    @empty
    	Новостей нет !!!
    @endforelse

	</div>

	<div class="footer">
		@include('footer')
	</div>

</body>
</html>