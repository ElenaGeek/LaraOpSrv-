@extends('home')

@section('title')
	@parent
	Админка новостей
@endsection

@section('content')
<div class="row justify-content-center">
	<div class="class-md-6">

<form action="{{route('admin::news::index')}}" method="post" >
@csrf
    <label class= "form-label">Заголовок:</label>
    	<div class="form-group">
        	<input type="text" class="shortext" name="title" placeholder="Заголовок"><br><br>
        </div>
    <label class= "form-label">Содержание:</label>
    	<div class="form-group">
        	<input type="textarea" class="shortext" name="content" placeholder="Содержание"><br><br>
        </div>
    <label class= "form-label"></label>
    	<div class="form-group">
        <input type="submit" class="btn-success" name="" placeholder="..."><br><br>
 		 </div>
</form>

	</div>
</div>
@endsection