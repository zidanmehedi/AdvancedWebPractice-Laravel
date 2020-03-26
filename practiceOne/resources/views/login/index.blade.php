<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		<div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
			<div class="col-md-auto col-lg-auto col-sm-auto">
				<div style="width: 100%; text-align: center">
					<h1>Login Page</h1>
				</div>
				<form method="post">
					<table class="table table-sm table-borderless">
						<tr>
							<td></td>
							<td>{{ csrf_field()}}</td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="uname" ></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" ></td>
						</tr>
						<tr>
							<td></td>
							<td><input class="btn btn-primary btn-sm" type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
			<div class="col-md-auto col-lg-auto col-sm-auto">
				<h3>{{session('msg')}}</h3>
			</div>
		</div>
	</div>
</body>
</html>
