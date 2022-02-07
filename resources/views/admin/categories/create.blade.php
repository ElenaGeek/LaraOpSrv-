@php
/** @var \App\Models\News $model */
/** @var \App\Models\Category[] $categories */
@endphp

@extends('home')

@section('title')
	@parent
	Создание категории
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
        <h1>Создать категорию</h1>
@php
//dd($model->id);
@endphp

{!!Form::open(['route' => 'admin::categories::save']) !!}
@csrf

@if($model->id)
    <input type="hidden" name="id" value="{{$model->id}}">
@endif


<div class="form-group">
    <label class= "form-label">{{__('labels.name')}}</label>
@error('name')
       <div class="alert alert-danger">{{$message}}</div>
@enderror

{!!Form::text("name", $model->name ?? old('name'), ['class' => "form-control"]) !!}

</div>

@php
//dd($model->name);
@endphp

<div class="form-group">
    <label class= "form-label">Номер фото</label>
{!!Form::text("image", $model->image ?? old('image'), ['class' => "form-control"]) !!}
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