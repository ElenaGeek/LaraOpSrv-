<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lesson 3 @yield('title')</title>
</head>
<body>
	<div class="header">
		@include('header')
	</div>

	<div class="content">
		<h1>Сайт новостей</h1>
		<h2>Приветствуем на сайте последних новостей. Для просмотра новостей выберите категорию и пройдите по ссылке.</h2>
        <p>Сайт предствляет новости в нескольких категориях - <b>Политика, Экономика, Культура, Погода.</b> <br> Вы можете посмотреть список новостей в каждой категории и подробную информацию о каждой новости.<br> Также Вы можете зарегистрироваться и добавить свою новость.</p>
	</div>

	<div class="menu">

		@yield('menu')
	</div>

	<div class="footer">
		@include('footer')
	</div>

</body>
</html>