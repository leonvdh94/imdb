@extends('layout.layout')

@section('content')


<div class="row">
	<div class="col-md-3">
		<img class="card-img-top"  src="{{asset('images/'.$actor->photo)}}">
	</div>
	<div class="col-md-9">
		<h1>{{$actor->firstname}} {{$actor->lastname}}</h1>
		<p><b>Biograhpy</b></p>
		<p>{{$actor->bio}}</p>	
	</div>
</div>	



@endsection
