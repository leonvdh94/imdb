@extends('layout.layout')

@section('content')
    <h2>Create pagina</h2>
    {!! Form::open(['url' => 'movie', 'method' => 'post', 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('Title', 'Moviename:')!!}
        {!! Form::text('title', '', ['class' => 'form-control']) !!}

        {!! Form::label('releasedate', 'Releasedate:')!!}
        {!! Form::date('releasedate', '', ['class' => 'form-control']) !!}

        {!! Form::label('photo', 'Photo:')!!}
        {!! Form::file('photo') !!}

        {!! Form::label('description', 'Description:')!!}
        {!! Form::text('description', '', ['class' => 'form-control']) !!}

        {!! Form::label('trailer', 'Trailer:')!!}
        {!! Form::text('trailer', '', ['class' => 'form-control']) !!}
    </div>

    <br>

    {!! Form::submit('create', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection