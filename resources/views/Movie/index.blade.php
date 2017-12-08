@extends('layout.layout')

@section('content')
    <h2>Movielist:</h2>
    <div class="postercontainer">


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
    </div>


    <br>
    <button>
        <a href="{{url('movie/create')}}">
            Create
        </a>
    </button>




@endsection