@extends('layout.layout')

@section('content')
<h2>Edit pagina</h2>
{!! Form::model($show , array('route' => array('show.update', $show->id), 'method' => 'PATCH', 'files' => true)) !!}


<div class="form-group">
    {!! Form::label('Title', 'Title:')!!}
    {!! Form::text('title', $show->title, ['class' => 'form-control']) !!}

    {!! Form::label('releasedate', 'Releasedate:')!!}
    {!! Form::date('releasedate', $show->releasedate, ['class' => 'form-control']) !!}

    {!! Form::label('photo', 'Photo:')!!}
    {!! Form::file('photo', null) !!}

    {!! Form::label('description', 'Description:')!!}
    {!! Form::text('description', $show->description, ['class' => 'form-control']) !!}

    {!! Form::label('trailer', 'Trailer:')!!}
    {!! Form::text('trailer', $show->trailer, ['class' => 'form-control']) !!}
</div>

<br>

{!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection