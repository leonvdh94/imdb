@extends('layout.layout')

@section('content')
<h2>Create new show</h2>
{!! Form::open(['url' => 'show', 'method' => 'post', 'files' => true]) !!}

<div class="form-group">
    {!! Form::label('Title', 'Showname:')!!}
    {!! Form::text('title', '', ['class' => 'form-control']) !!}

    {!! Form::label('releasedate', 'Releasedate:')!!}
    {!! Form::date('releasedate', '', ['class' => 'form-control']) !!}

    {!! Form::label('description', 'Description:')!!}
    {!! Form::text('description', '', ['class' => 'form-control']) !!}

    {!! Form::label('story', 'Story:')!!}
    {!! Form::text('story', '', ['class' => 'form-control']) !!}

    {!! Form::label('photo', 'Photo:')!!}
    {!! Form::file('photo') !!}
    <br>

    {!! Form::label('trailer', 'Trailer:')!!}
    {!! Form::text('trailer', '', ['class' => 'form-control']) !!}
</div>



{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection