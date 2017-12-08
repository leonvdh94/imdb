@extends('layout.layout')

@section('content')
<h2>Index pagina</h2>

@foreach($show as $shows)
<ul class="img-list">
	<li>
		<a href="{{url('show/'.$show->id)}}">
			<img class="movieposter" src="{{asset('images/'.$show->photo)}}">
			<span class="text-content"><span>{{$show->title}}</span></span>
		</a>
	</li>
</ul>

@endforeach


@endsection