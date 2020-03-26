

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/custom.js"></script>
</head>
<body>	

<div class="container">
	<div class="row justify-content-lg-center justify-content-sm-center justify-content-md-center">
		<div class="col-md-auto col-sm-auto col-lg-auto">
			<h1>Welcome Home! {{session('username')}}</h1> 
		</div>
	</div>
	<div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center mt-5">
		<div class="col-sm-auto col-md-auto col-lg-auto">
			<a class="alert alert-primary" href="{{route('home.add')}}">Create user</a>&emsp;
			<a class="alert alert-primary" href="{{route('home.list')}}">View Users</a>&emsp;
			<a class="alert alert-primary" href="/logout">Logout</a> 
		</div>
	</div>
</div>
</body>
</html>