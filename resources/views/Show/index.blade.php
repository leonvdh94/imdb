@extends('layout.layout')

@section('content')

<h2>Index pagina</h2>
<br>
@foreach($show as $shows)
<div class="row border">
	<div class="col-md-3">		
		<a href="{{url('show/'.$shows->id)}}">
			<img class="card-img-top cardshadow" src="{{asset('images/'.$shows->photo)}}">
		</a>
	</div>
	<div class="col-md-8 offset-md-1">
		<h3>{{$shows->title}}</h3>
		<p><b>Short description</b></p>
		<p>{{$shows->description}}</p>
		<a href="{{url('show/'.$shows->id)}}">
			<button class="btn btn-primary">Info</button>
		</a>
	</div>
</div>
<br>
@endforeach
@endsection

