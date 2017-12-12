@extends('layout.layout')

@section('content')
<h2>Actorlist:</h2>
<div class="postercontainer">
    @foreach($actor as $actors)
    <ul class="img-list">
        <li>
            <a href="{{url('actor/'.$actors->id)}}">
                <img class="movieposter" src="{{asset('images/'.$actors->photo)}}">
                <span class="text-content"><span>{{$actors->firstname}} {{$actors->lastname}}</span></span>
            </a>
        </li>

    </ul>

    @endforeach
</div>

<br>


<a href="{{url('actor/create')}}">
    <button class="btn btn-primary">Create</button>
</a>




@endsection