@extends('layout.layout')

@section('content')


<h2>{{$movie->title}}</h2>
<div class="infocontainer">
	<p>{{$movie->description}}</p>
	<img class="infoposter"  src="{{asset('images/'.$movie->photo)}}">


	<iframe src="https://www.youtube.com/embed/{{$movie->trailer}}" frameborder="0" allowfullscreen></iframe>
	<button>
		<a href="{{url('movie/'.$movie->id.'/edit')}}">
			Edit
		</a>
	</button>
</div>










@endsection

