@extends('layout.layout')

@section('content')


<div class="row">
	<div class="col-md-3">
		<img class="card-img-top"  src="{{asset('images/'.$show->photo)}}">
	</div>
	<div class="col-md-9">
		<h1>{{$show->title}}</h1>
		<hr>
		<p><b>Short description</b></p>
		<p>{{$show->description}}</p>	
		<p><b>Story</b></p>
		<p>{{$show->story}}</p>
		<br>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$show->trailer}}" allowfullscreen></iframe>
		</div>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-9">
		<div class="form-group">
			@if(Auth::check())
			{!!Form::open(['url' => 'comment'])!!}
			{!!Form::textarea('comment', '', ['placeholder' => 'Type comment here.', 'rows' => '2', 'class' => 'form-control form-control-lg'])!!}
			{!!Form::hidden('show_id', $show->id)!!}
			{!!Form::hidden('user_id', Auth::user()->id)!!}
			<br>

			{!!FOrm::submit('Add a comment', ['class' => 'btn btn-primary float-md-right'])!!}
			{!!Form::close()!!}
			@else
			<p class="text">Log in <a href="{{url('/login')}}">here </a>to add a comment.</p>
			@endif
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-9">
		<br>
		@foreach($show->comment as $comments)
		<p><b>{{$comments->created_at->diffForHumans()}} by {{$comments->user->name}}</b></p>
		@if(Auth::check())
		@if(Auth::user()->id === $comments->user_id OR Auth::user()->role === 2)
		{!! Form::model($comments,['method' => 'DELETE','route'=>['comment.destroy', $comments->id]]) !!}
		{{csrf_field()}}
		{!! Form::submit('Delete comment', ['class' => 'btn btn-danger btn-sm float-md-right']) !!}
		{!! Form::close() !!}
		@endif
		@endif
		<p>{{$comments->comment}}</p>
		<hr>
		@endforeach
	</div>
</div>


@endsection

