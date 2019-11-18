<!DOCTYPE html>
<html>
<head>
	<title>Todo Lists</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
           @include('inc.messages')
		   @yield('content')

	</div>
<br>
<div class="card card-inverse text-center pt-2" style="background-color: #333; border-color: #333;">
	<h4 class="p-2 text-light">Copyright &copy 2019</h4>
</div>

</body>
</html> 