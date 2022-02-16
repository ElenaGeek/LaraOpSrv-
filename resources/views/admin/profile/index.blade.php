@extends('layouts.main')

@section('title')
	@parent
	Админка пользователей
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="class-md-6">
        <h1>Пользователи</h1>

    <p>
        <a class="btn btn-success" href="{{route('admin::profile::create')}}">
        Создать
        </a>
    </p>

<div class="list-group">
        @csrf
        @forelse($users as $item)
        <div href="#" class="list-group-item">
            <h2>{{$item->name}}</h2>
        <p>
        <a class="btn btn-primary" href="{{route('admin::profile::update', ['user' => $item->id] )}}">
            Изменить
        </a>
        <a class="btn btn-danger" href="{{route('admin::profile::delete', ['id' => $item->id] )}}">
            Удалить
        </a>
        </p>
        </div>
@empty
Пользователей нет!
@endforelse
    </div>

    <hr>
<div class="row justify-content-center">
    {{$users->links()}}
</div>

	</div>
</div>

@endsection