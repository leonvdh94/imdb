@extends('layout.layout')

@section('content')
<h2>Actorlist:</h2>
@foreach($actor as $actors)
<ul>
    <li>
        <a href="{{url('actor/'.$actors->id)}}">

            {{$actors->firstname}} {{$actors->lastname}}

        </a>
    </li>
    <img src="{{asset('images/'.$actors->photo)}}">
</ul>



@endforeach
  <button>
        <a href="{{url('actor/create')}}">
            Create
        </a>
    </button>



@endsection