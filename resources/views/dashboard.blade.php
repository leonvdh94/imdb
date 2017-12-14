@extends('layout.layout')
@section('content')
<div class="container">
	<table class="table table-striped table-dark">
		<h1>List of users</h1> 
		<hr>
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Member since</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($user as $users)
			<tr>
				<td>{{$users->id}}</td>
				<td>{{$users->name}}</td>
				<td>{{$users->email}}</td>
				@if($users->role == 1)
				<td>User</td>
				@else
				<td>Admin</td>
				@endif
				<td>{{$users->created_at}}</td>

				<td>{!! Form::model($users,['method' => 'DELETE','route'=>['user.destroy', $users->id]]) !!}

					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<table class="table table-striped table-dark">
		<h2>List of movies <a class="float-right" href="{{url('movie/create')}}">
			<button class="btn btn-primary">Create new movie</button>
		</a></h2>
		<hr>
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Releasedate</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($movie as $movies)
			<tr>
				<td>{{$movies->id}}</td>
				<td><a href="{{url('movie/'.$movies->id)}}">{{$movies->title}}</a></td>
				<td>{{$movies->releasedate}}</td>
				<td class="btn-group" role="group">
					{!! Form::model($movies,['method' => 'DELETE','route'=>['movie.destroy', $movies->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
					<a class="btn btn-primary" href="{{url('movie/'.$movies->id.'/edit')}}">Edit</a>
				</td>
			</tr>

			@endforeach
		</tbody>
	</table>
	<table class="table table-striped table-dark">
		<h3>List of shows <a class="float-right" href="{{url('show/create')}}">
			<button class="btn btn-primary">Create new show</button>
		</a></h3>
		<hr>
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Releasedate</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($show as $shows)
			<tr>
				<td>{{$shows->id}}</td>
				<td><a href="{{url('show/'.$shows->id)}}">{{$shows->title}}</a></td>
				<td>{{$shows->releasedate}}</td>
				<td class="btn-group" role="group">
					{!! Form::model($shows,['method' => 'DELETE','route'=>['show.destroy', $shows->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
					<a class="btn btn-primary" href="{{url('show/'.$shows->id.'/edit')}}">Edit/Add season</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<table class="table table striped table-dark">
		<h4>List of actors <a class="float-right" href="{{url('actor/create')}}">
			<button class="btn btn-primary">Create new actor</button>
		</a></h4>
		<hr>
		<thead>
			<tr>
				<th>#</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Birthdate</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($actor as $actors)
			<tr>
				<td>{{$actors->id}}</td>
				<td><a href="{{url('actor/'.$actors->id)}}">{{$actors->firstname}}</a></td>
				<td><a href="{{url('actor/'.$actors->id)}}">{{$actors->lastname}}</td>
					<td>{{$actors->birthdate}}</td>
					<td class="btn-group" role="group">
						{!! Form::model($actors,['method' => 'DELETE','route'=>['actor.destroy', $actors->id]]) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
						<a class="btn btn-primary" href="{{url('actor/'.$actors->id.'/edit')}}">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	@endsection

