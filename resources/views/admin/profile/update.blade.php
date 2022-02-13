@extends('layouts.main')

@section('title')
	@parent
	Профиль
@endsection

@section('content')

<div class="row justify-content-center">
@php
//dump($errors->get('name'));
//dump($errors->all());
@endphp

@if ($errors->any())
    <div class ="alert alert-danger">
        <ul>
            @foreach ($errors ->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@php
//dump(session()->all());
@endphp

<div>
@if (session('success'))
    <div class ="alert alert-success">
        {{session('success')}}
    </div>
@endif
</div>
<div class="class-md-6">
        <h1>Профиль пользователя</h1>
@php
//dump($user->id);
//dump($user->name);
//dump($user->password);
@endphp

{!!Form::open(['route' => 'admin::profile::update']) !!}
@csrf

@if($user->id)
    <input type="hidden" name="id" value="{{$user->id}}">
@endif

<div class="form-group">
<!--    <label class= "form-label">Имя</label>-->

    <label class= "form-label">{{__('labels.username')}}</label>
@error('name')
       <div class="alert alert-danger">{{$message}}</div>
@enderror

        <div class="form-group">
            <input type="text" class="form-control" name="name" value="{{$user->name ?? old('name')}}">
</div>

<div class="form-group">
    <label class= "form-label">Email</label>
        <div class="form-group">
            <input type="email" class="form-control" name="email" value="{{$user->email ?? old('email')}}">
</div>

<div class="form-group">
    <label class= "form-label">Новый пароль</label>
        <div class="form-group">
            <input type="password" class="form-control" name="password">
</div>

<div class="form-group">
    <label class= "form-label">Текущий пароль</label>
        <div class="form-group">
            <input type="password" class="form-control" name="current_password">
</div>

<div class="form-group">
    <label class= "form-label">Роль администратора</label>
        <div class="form-group">
            <input type="checkbox" class="form-control" name="is_admin">
</div>

<div class="form-group">
    <label class= "form-label"></label>
        <div class="form-group">
        <input type="submit" class="btn btn-success" value="Сохранить" ><br><br>
    </div>
</div>

{!! Form::close() !!}

	</div>
</div>

@endsection