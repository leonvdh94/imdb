@extends('layout.layout')

@section('content')
<h2>Movielist:</h2>


@foreach($movie as $movies)
<ul class="img-list">
    <li>
        <a href="{{url('movie/'.$movies->id)}}">
            <img class="movieposter" src="{{asset('images/'.$movies->photo)}}">
            <span class="text-content"><span>{{$movies->title}}</span></span>
        </a>
    </li>
</ul>

@endforeach




<button>
    <a href="{{url('movie/create')}}">
        Create
    </a>
</button>




@endsection