@extends('layout.layout')

@section('content')

<h2>{{$actor->firstname}} {{$actor->lastname}}</h2>
<div>
	<p>{{$actor->bio}}</p>
	<img src="{{asset('images/'.$actor->photo)}}">

	<button>
		<a href="{{url('actor/'.$actor->id.'/edit')}}">
			Edit
		</a>
	</button>
</div>



@endsection