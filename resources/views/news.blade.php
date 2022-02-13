@extends('layouts.main')

@section('title')
@parent
	News
@endsection

@section('content')
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

@endsection