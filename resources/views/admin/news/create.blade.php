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
<div class="row justify-content-center">
@if (session('success'))
    <div class ="alert alert-success">
        {{session('success')}}
    </div>
@endif

	<div class="class-md-6">
        <h1>Создать новость</h1>
// {!!Form::open(['route' => 'admin::news::save']) !!}

<form action="{{route('admin::news::save')}}" method="post"

@csrf
@if($model->id)
    <input type="hidden" name="id" value="{{$model->id}}">
@endif

@php
//dump($model);
@endphp

<div class="form-group">
    <label class= "form-label">Заголовок:</label>
    	<div class="form-group">
        	<input type="text" class="shortext" name="$model->title" placeholder="Заголовок">
        </div>
    @error('title')
           <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label class= "form-label">Содержание:</label>
    	<div class="form-group">
        	<input type="textarea" class="form-control" name="$model->description" placeholder="Содержание">
        </div>
</div>

<div class="form-group">
    <label class= "form-label">Категория:</label>

    {!!Form::select('categor_id)', $categories, $model->category_id, ['class' =>"form-control"]) !!}

    <!--
        <div class="form-group">
            <input type="select" class="form-control" name="$model->category_id">
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
        <input type="date" class="form-control" name="$model->publish_date" dataformats="Y-m-d">
 		 </div>
</div>
         <label class= "form-label"></label>
        <div class="form-group">
        <input type="submit" class="btn-success" name="" placeholder="..."><br><br>
         </div>
</form>

	</div>
</div>
@endsection