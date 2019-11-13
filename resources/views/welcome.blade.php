<!DOCTYPE html>
<html lang="en">
<head>
  <title>our app - @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

@section('navbar')
<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/contacts')}}">Conatact</a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="{{url('/nabeel')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/abc')}}">About</a>
    </li>
  </ul>
</nav>
<br>


<div class="container-fluid">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
  <p>The navbar-expand-xl|lg|md|sm class determines when the navbar should stack vertically (on extra large, large, medium or small screens).</p>
</div>
@show

</body>
</html>
