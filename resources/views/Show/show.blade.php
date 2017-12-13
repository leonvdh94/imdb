@extends('layout.layout')

@section('content')


<h2>{{$show->title}}</h2>
<div class="infocontainer">
	<p>{{$show->description}}</p>
	<img class="infoposter"  src="{{asset('images/'.$show->photo)}}">


	<iframe src="https://www.youtube.com/embed/{{$show->trailer}}" frameborder="0" allowfullscreen></iframe>
	<button>
		<a href="{{url('show/'.$show->id.'/edit')}}">
			Edit
		</a>
	</button>
</div>

<div class="seasons">
	@foreach($show->season as $seasons)
	<p>{{$seasons->title}}</p>
	@endforeach
</div>







@endsection

