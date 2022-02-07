@php
/** @var \App\Models\News $model */
/** @var \App\Models\Category[] $categories */
@endphp

@extends('home')

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
//dd($model);
@endphp

{!!Form::open(['route' => 'admin::news::save']) !!}

<!--<form action="{{route('admin::news::save')}}" method="post" -->

@csrf

@if($model->id)
    <input type="hidden" name="id" value="{{$model->id}}">
@endif



<div class="form-group">
    <label class= "form-label">Заголовок:</label>
@error('title')
       <div class="alert alert-danger">{{$message}}</div>
@enderror
    	<div class="form-group">
        	<input type="text" class="form-control" name="{{$model->title}}" placeholder="Заголовок">
        </div>

</div>

@php
dd($model->title);
@endphp
<div class="form-group">
    <label class= "form-label">Содержание:</label>
    	<div class="form-group">
        	<input type="textarea" class="form-control" name="{{$model->description}}" placeholder="Содержание">
        </div>
</div>

<div class="form-group">
    <label class= "form-label">Категория:</label>

    {!!Form::select('category_id', $categories, $model->category_id, ['class' =>"form-control"]) !!}

    <!--
        <div class="form-group">
            <input type="select" class="form-control" name="{{$model->category_id}}">
        </div>
    -->
</div>

<div class="form-group">
    <input type="hidden" name="active" value="0">
    <label class= "form-label">Активная
        {!!Form::checkbox("active",1, $model->active) !!}
    </label>

</div>

<div class="form-group">
    <label class= "form-label">Дата публикации</label>
    	<div class="form-group">
        <input type="date" class="form-control" name="{{$model->publish_date}}" dataformats="Y-m-d">
 		 </div>
</div>
         <label class= "form-label"></label>
        <div class="form-group">
        <input type="submit" class="btn-success" name="" placeholder="..."><br><br>
         </div>
<!--</form>-->
{!! Form::close() !!}

	</div>
</div>

@php
//dd($model->title);
@endphp
@endsection