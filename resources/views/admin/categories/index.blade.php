@extends('home')

@section('title')
	@parent
	Категории
@endsection

@section('content')
<div class="row justify-content-center">
	<div class="class-md-6">
<h1>Категории</h1>

    <p>
        <a class="btn btn-success" href="{{route('admin::categories::create')}}">
        Создать
        </a>
    </p>

    <div class="list-group">
        @csrf
        @forelse($categories as $item)
        <div href="#" class="list-group-item">
            <h2>{{$item->name}}</h2>
        <p>
        <a class="btn btn-primary" href="{{route('admin::categories::update', ['category' => $item->id] )}}">
            Изменить
        </a>
        <a class="btn btn-danger" href="{{route('admin::categories::delete', ['id' => $item->id] )}}">
            Удалить
        </a>
        </p>
        </div>
@empty
Категорий нет!
@endforelse
    </div>
    <hr>
<div class="row justify-content-center">
    {{$categories->links()}}
</div>

	</div>
</div>
@endsection