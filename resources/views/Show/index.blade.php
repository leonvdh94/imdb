@extends('layout.layout')

@section('content')
<h2>Index pagina</h2>

@foreach($show as $shows)

<ul class="img-list">
	<li>
		<a href="{{url('show/'.$shows->id)}}">
			<img class="movieposter" src="{{asset('images/'.$shows->photo)}}">
			<span class="text-content"><span>{{$shows->title}}</span></span>
		</a>
	</li>
</ul>

@endforeach

<br>
<button>
	<a href="{{url('show/create')}}">
		Create
	</a>
</button>

@endsection