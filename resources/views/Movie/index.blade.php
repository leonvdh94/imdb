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
			<p><b>{{$movies->title}}</b></p>
				<p>Releasedate: {{$movies->releasedate}}</p>
				<p>{{$movies->description}}</p>
				<a href="{{url('movie/'.$movies->id)}}">
					<button class="btn btn-primary">Info</button>
				</a>
			</div>
		</div>
	<br>
	@endforeach
	@endsection