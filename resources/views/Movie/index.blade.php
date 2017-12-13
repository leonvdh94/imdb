@extends('layout.layout')

@section('content')
<h2>Movielist:</h2>
<div class="container">
	

	@foreach($movie as $movies)
	<div class="row">
		<div class="col">
			<ul class="img-list">
				<li>
					<a href="{{url('movie/'.$movies->id)}}">
						<img class="movieposter" src="{{asset('images/'.$movies->photo)}}">
						
					</a>
				</li>
			</ul>
		</div>
	</div>
	@endforeach
	


	<br>

	<a href="{{url('movie/create')}}">
		<button class="btn btn-primary">Create</button>
	</a>





	@endsection