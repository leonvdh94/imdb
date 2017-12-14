@extends('layout.layout')

@section('content')


<div class="row">
	<div class="col-md-3">
		<img class="card-img-top"  src="{{asset('images/'.$show->photo)}}">
	</div>
	<div class="col-md-9">
		<h1>{{$show->title}}</h1>
		<p><b>Short description</b></p>
		<p>{{$show->description}}</p>	
		<p><b>Story</b></p>
		<p>{{$show->story}}</p>
	</div>
</div>	
<hr>
<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$show->trailer}}" allowfullscreen></iframe>
</div>
@endsection

