<div class="menu">
	<div>
		<a href="{{route('locale', ['locale' => 'en'])}}">
			En
		</a>
		<a href="{{route('locale', ['locale' => 'ru'])}}">
			Ru
		</a>
	</div>
	<br>
	@foreach($menu as $item)
	<div>
		<a href="{{route($item['alias'])}}">
			{{$item['title']}}
		</a>
	</div>
	@endforeach
	<hr>


</div>


