@extends('layout.layout')

@section('content')
<h1>Edit {{$show->title}}</h1>
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
    <br>
    {!! Form::submit('Edit show', ['class' => 'btn btn-primary'])!!}

    {!! Form::close()!!}

</div>
<hr>
<h2>Add season to {{$show->title}}</h2>
{!! Form::open(['url' => 'season'])!!}
<div class="form-group">
    {!! Form::label('Title', 'Title:')!!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    {!! Form::hidden('show_id', $show->id) !!}
    <br>
    {!! Form::submit('Add season', ['class' => 'btn btn-primary'])!!}
    {!! Form::close() !!}


</div>
@endsection