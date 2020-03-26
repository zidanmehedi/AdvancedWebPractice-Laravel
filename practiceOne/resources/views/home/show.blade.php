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
		<div class="col-lg-auto col-sm-autocol-md-auto">
			<h1>User Information</h1>
		</div>
	</div>
	<div class="row justify-content-lg-center justify-content-sm-center justify-content-md-center mt-5">
		<div class="col-lg-auto col-sm-autocol-md-auto">
			<table class="table table-dark table-hover">
				<tr>
					<td>ID</td>
					<td>:</td>
					<td>{{$id}}</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td>{{$name}}</td>
				</tr>
				<tr>
					<td>CGPA</td>
					<td>:</td>
					<td>{{$cgpa}}</td>
				</tr>
				<tr>
					<td>DEPT</td>
					<td>:</td>
					<td>{{$dept}}</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row justify-content-lg-center justify-content-sm-center justify-content-md-center mt-2">
		<div class="col-lg-auto col-sm-autocol-md-auto">
			<a class="alert-link" href="{{route('home.list')}}">Back</a>&emsp;
			<a class="alert-link" href="/logout">Logout</a>
		</div>
	</div>
</div>
</body>
</html>