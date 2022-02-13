@extends('layouts.main')

@section('title')
@parent
	Categories
@endsection

@section('content')
<h1>Категории новостей</h1>
<h2>Приветствуем на странице категорий новостей.</h2>
<p>Для просмотра новостей выберите категорию и пройдите по ссылке.</p>

	@php
	/*dd($categories);*/
	//dump($categories);
	@endphp

	@forelse($categories as $id => $item)
		<div>
            <img src='img/{{$item->id}}.png'></img><br>
            <a href='/news/{{$item->id}}'>
            {{$item->name}}

            </a>
        </div>
    @empty
    	Новостей нет !!!
    @endforelse
@endsection