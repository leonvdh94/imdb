<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Movie Database | Leon van der Houven</title>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      ]) !!};
    </script>


  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navmargin">
      <a class="navbar-brand" href="#">IMDB</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('movie')}}">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('actor')}}">Actors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('show')}}">Shows</a>
        </li>


      </ul>
      <ul class="navbar nav">
        <li class="nav-item">
          {!! Form::open(['action' => ['SearchController@search', ], 'method' => 'POST']) !!}
          {{ Form::token() }}
          {{ Form::text('query', null, ['placeholder' => 'Search the moviedatabase...', 'class' => 'form-control']) }}
        </li>
        <li class="nav-item">
          {{ Form::submit('Search', ['class' => 'btn btn-outline-primary my-2 my-sm-0']) }}
          {{ Form::close() }}
        </li>

      </ul>




      <ul class="navbar-nav">
        <!-- Authentication Links -->
        @if (Auth::guest())
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        @else
        <li class="nav item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} 
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledyby="navbarDropdown">
            @if (Auth::check() && Auth::user()->role ==2)
            <a class="dropdown-item" href="{{url('admin')}}">Adminpage</a>
            @endif
            <a class="dropdown-item" href="{{route('logout')}}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST"
          style="display: none;">
          {{ csrf_field() }}
        </form>
      </div>

    </li>
    @endif
  </ul>
</nav>    


<div class="container">
  @yield('content')  
</div>




</body>
</html>
