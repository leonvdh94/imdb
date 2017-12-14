@extends('layout.layout')

@section('content')

<div class="row">
	<div class="col-md-3">
		<img class="card-img-top"  src="{{asset('images/'.$movie->photo)}}">
	</div>
	<div class="col-md-9">
		<h1>{{$movie->title}}</h1>
		<p><b>Short description</b></p>
		<p>{{$movie->description}}</p>	
		<p><b>Story</b></p>
		<p>{{$movie->story}}</p>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$movie->trailer}}" allowfullscreen></iframe>
		</div>
	</div>
</div>	
<hr>
<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-9">
		<div class="form-group">
			@if(Auth::check())
			{!!Form::open(['url' => 'comment'])!!}
			{!!Form::textarea('comment', '', ['placeholder' => 'Type comment here.', 'rows' => '2', 'class' => 'form-control form-control-lg'])!!}
			{!!Form::hidden('movie_id', $movie->id)!!}
			{!!Form::hidden('user_id', Auth::user()->id)!!}
			{!!FOrm::submit('Add a comment', ['class' => 'btn btn-primary float-md-right'])!!}
			{!!Form::close()!!}
			@else
			<p class="text">Log in <a href="{{url('/login')}}">here</a>to add a comment.</p>
			@endif
		</div>
	</div>
</div>



@endsection

