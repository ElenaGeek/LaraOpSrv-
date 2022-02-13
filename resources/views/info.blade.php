@extends('layouts.main')

@section('title')
@parent
	Card
@endsection

@section('content')
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

@endsection
