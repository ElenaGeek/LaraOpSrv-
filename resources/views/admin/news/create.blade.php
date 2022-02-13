@php
/** @var \App\Models\News $model */
/** @var \App\Models\Category[] $categories */
@endphp

@extends('layouts.main')

@section('title')
	@parent
	Создание новости
@endsection

@section('content')

<div class="justify-content-center">
@if ($errors->any())
    <div class ="alert alert-danger">
        <ul>
            @foreach ($errors ->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class ="alert alert-success">
        {{session('success')}}
    </div>
@endif

<div class="class-md-6">
        <h1>Создать новость</h1>
@php
//dd($model->id);
@endphp

{!!Form::open(['route' => 'admin::news::save']) !!}
@csrf

@if($model->id)
    <input type="hidden" name="id" value="{{$model->id}}">
@endif


<div class="form-group">
    <label class= "form-label">{{__('labels.title')}}</label>
@error('title')
       <div class="alert alert-danger">{{$message}}</div>
@enderror

{!!Form::text("title", $model->title ?? old('title'), ['class' => "form-control"]) !!}

</div>

@php
//dd($model->title);
@endphp

<div class="form-group">
    <label class= "form-label">Краткая информация:</label>
{!!Form::text("info", $model->info ?? old('info'), ['class' => "form-control"]) !!}
</div>

<div class="form-group">
    <label class= "form-label">Содержание:</label>
{!!Form::textarea("description", $model->description ?? old('description'), ['class' => "form-control"]) !!}
</div>

<div class="form-group">
    <label class= "form-label">Категория:</label>
{!!Form::select('category_id', $categories, $model->category_id, ['class' =>"form-control"]) !!}
</div>

<div class="form-group">
    <input type="hidden" name="active" value="0">
    <label class= "form-label">Активная
        {!!Form::checkbox("active",1, $model->active) !!}
    </label>

</div>

<div class="form-group">
    <label class= "form-label">Дата публикации</label>
{!!Form::date("publish_date", $model->publish_date ?? old('dpublish_date'), ['dataformats' => "Y-m-d", 'class' => "form-control"]) !!}
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