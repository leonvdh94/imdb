@extends('layout.layout')

@section('content')
<h2>Movielist:</h2>
<br>
@foreach($movie as $movies)
<div class="row border">
	<div class="col-md-3">
		<a href="{{url('movie/'.$movies->id)}}">
			<img class="card-img-top cardshadow" src="{{asset('images/'.$movies->photo)}}">
		</a>
	</div>
	<div class="col-md-8 offset-md-1">
		<h3>{{$movies->title}}</h3>
		<p>Releasedate: {{$movies->releasedate}}</p>
		<p><b>Short description</b></p>
		<p>{{$movies->description}}</p>
		<a href="{{url('movie/'.$movies->id)}}">
			<button class="btn btn-primary">View more info</button>
		</a>
	</div>
</div>
	
	<br>
	@endforeach
	@endsection