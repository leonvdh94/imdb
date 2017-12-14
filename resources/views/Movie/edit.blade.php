@extends('layout.layout')

@section('content')
<h1>Edit {{$movie->title}}</h1>
{!! Form::model($movie , array('route' => array('movie.update', $movie->id), 'method' => 'PATCH', 'files' => true)) !!}


<div class="form-group">
    {!! Form::label('Title', 'Title:')!!}
    {!! Form::text('title', $movie->title, ['class' => 'form-control']) !!}

    {!! Form::label('releasedate', 'Releasedate:')!!}
    {!! Form::date('releasedate', $movie->releasedate, ['class' => 'form-control']) !!}

    {!! Form::label('photo', 'Photo:')!!}
    {!! Form::file('photo', null) !!}
    <br>
    {!! Form::label('description', 'Description:')!!}
    {!! Form::text('description', $movie->description, ['class' => 'form-control']) !!}

    {!! Form::label('trailer', 'Trailer:')!!}
    {!! Form::text('trailer', $movie->trailer, ['class' => 'form-control']) !!}
    <br>
    {!! Form::submit('Edit', ['class' => 'btn btn-primary'])!!}

    {!! Form::close()!!}
</div>



@endsection
