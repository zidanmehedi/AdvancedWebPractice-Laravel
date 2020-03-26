<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
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
		<div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
			<div class="col-md-auto col-lg-auto col-sm-auto">
				<h1>User Information</h1>
			</div>
		</div>
		<form method="post">
			<div class="form-group row justify-content-lg-center justify-content-md-center justify-content-sm-center">
				<div class="col-md-auto col-lg-auto col-sm-auto">
					<table class="table table-sm table-borderless mt-5">
						<tbody>
							<tr >
								<td></td>
								<td>{{ csrf_field()}}</td>
							</tr>
							<tr>
								<td>ID</td>
								<td>:</td>
								<td><input type="text" name="uname" value="{{$id}}" readonly></td>
							</tr>
							<tr>
								<td>Name</td>
								<td>:</td>
								<td><input type="text" name="name" value="{{$name}}"></td>
							</tr>
							<tr>
								<td>CGPA</td>
								<td>:</td>
								<td><input type="text" name="cgpa" value="{{$cgpa}}"></td>
							</tr>
							<tr>
								<td>DEPT</td>
								<td>:</td>
								<td><input type="text" name="dept" value="{{$dept}}"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
				<div class="col-md-auto col-lg-auto col-sm-auto">
					<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Update">
				</div>
			</div>
		</form>
		<div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
			<div class="col-md-auto col-lg-auto col-sm-auto mt-4">
				<h5><a class="alert-link" href="{{route('home.list')}}">Back</a>&emsp;
				<a class="alert-link" href="/logout">Logout</a></h5>
			</div>
		</div>
	</div>
</body>
</html>