@extends('layout.layout')

@section('content')
<h2>Actorlist:</h2>
<br>
@foreach($actor as $actors)
<div class="row border">
    <div class="col-md-3">
        <a href="{{url('actor/'.$actors->id)}}">
            <img class="card-img-top cardshadow" src="{{asset('images/'.$actors->photo)}}">
        </a>
    </div>
    <div class="col-md-8 offset-md-1">
        <h3>{{$actors->firstname}} {{$actors->lastname}}</h3>
        <p><b>Biography</b></p>
        <p>{{$actors->bio}}</p>
        <a href="{{url('actor/'.$actors->id)}}">
            <button class="btn btn-primary">Info</button>
        </a>
    </div>
</div>
<br>
@endforeach
@endsection


