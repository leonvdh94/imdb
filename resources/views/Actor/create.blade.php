@extends('layout.layout')

@section('content')
<h2>Create new actor</h2>
{!! Form::open(['url' => 'actor', 'method' => 'post', 'files' => true]) !!}

<div class="form-group">
    {!! Form::label('firstname', 'First name:')!!}
    {!! Form::text('firstname', '', ['class' => 'form-control']) !!}

    {!! Form::label('lastname', 'Last name:')!!}
    {!! Form::text('lastname', '', ['class' => 'form-control']) !!}

    {!! Form::label('gender', 'Gender:')!!}
    {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female', 'Toaster' => 'Toaster' ], '', ['class' => 'form-control']) !!}

    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::date('birthdate', '', ['class' => 'form-control']) !!}

    {!! Form::label('bio', 'Bio:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}

    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo') !!}
</div>

<br>

{!! Form::submit('Create/upload', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
