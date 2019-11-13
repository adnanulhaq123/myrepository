<html>

<head>
<title> @yield('title')
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<p>this is just a test2</p>

@section('abc')
<nav class="navbar navbar--scpand-sm bg-light">
<ul class="navbar-nav">

<li class="nav-item">
<a id="index" class="navbar-brand" href="{{url('welcome')}}">welcome</a>
</li>
@endsection
<li class="nav-item">
<a id="index" class="navbar-brand" href="{{url('about')}}">about</a>
</li>

</nav>

</body>
</html>