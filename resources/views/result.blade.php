@extends('layout.layout')
@section('content')

@if(empty($resultMovie) && empty($resultShow))
<div class="row">
    <div class="alert alert-danger col-sm-10 offset-md-1">
        <strong>Alert!</strong> {{$error}}
    </div>
</div>
@else
<div class="row">
    <div class="col-sm-10 offset-sm-1">
        <h2>Search result:</h2>
    </div>
    
</div>

@foreach($resultMovie as $movies)
<div class="row border">
    <div class="col-md-3">
        <a href="{{url('movie/'.$movies->id)}}">
            <img class="card-img-top cardshadow" src="{{asset('images/'.$movies->photo)}}">
        </a>
    </div>
    <div class="col-md-8 offset-md-1">
        <h3 class="card-title">{{$movies->title}}</h3>
        <p><b>Short description</b></p>
        <p>{{$movies->description}}</p>
        <a href="{{url('movie/'.$movies->id)}}">
            <button class="btn btn-primary">View more info</button>
        </a>
    </div>
</div>
<br>
@endforeach
@foreach($resultShow as $shows)
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
            <button class="btn btn-primary">View more info</button>
        </a>
    </div>
</div>
<br>
@endforeach
@foreach($resultActor as $actors)
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
        <a href="{{url('show/'.$actors->id)}}">
            <button class="btn btn-primary">View more info</button>
        </a>
    </div>
</div>
@endforeach

@endif
@endsection
