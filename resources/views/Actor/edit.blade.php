@extends('layout.layout')

@section('content')
<h2>Edit {{$actor->firstname}} {{$actor->lastname}}</h2>
{!! Form::model($actor , array('route' => array('actor.update', $actor->id), 'method' => 'PATCH', 'files' => true)) !!}


<div class="form-group">
    {!! Form::label('firstname', 'First name:')!!}
    {!! Form::text('firstname', $actor->firstname, ['class' => 'form-control']) !!}

    {!! Form::label('lastname', 'Last name:')!!}
    {!! Form::text('lastname', $actor->lastname, ['class' => 'form-control']) !!}

    {!! Form::label('gender', 'Gender:')!!}
    {!! Form::select('gender',['Male' => 'Male', 'Female' => 'Female', 'Toaster' => 'Toaster' ], '', ['class' => 'form-control']) !!}

    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::date('birthdate', $actor->birthdate, ['class' => 'form-control']) !!}

    {!! Form::label('bio', 'Bio:') !!}
    {!! Form::textarea('bio', $actor->bio, ['class' => 'form-control']) !!}

    {!! Form::label('photo', 'Photo:') !!}
    {!! Form::file('photo', null) !!}
    <br><br>
    {!! Form::submit('Edit', ['class' => 'btn btn-primary'])!!}

    {!! Form::close()!!}
</div>


@endsection
