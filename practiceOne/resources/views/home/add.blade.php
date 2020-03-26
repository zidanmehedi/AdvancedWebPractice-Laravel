<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
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
			<div class="col-lg-auto col-md-auto col-sm-auto">
				<form method="post">
					<!-- @csrf -->
					<!--{{ csrf_field()}} -->	
					<table class="table table-sm table-borderless">
						<tr>
							<td></td>
							<td><h1>Add User</h1></td>
						</tr>
						<tr >
							<td></td>
							<td>{{ csrf_field()}}</td>
						</tr>
						<tr>
							<td>User Id</td>
							<td><input type="text" name="uname" ></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name" ></td>
						</tr>
						<tr>
							<td>CGPA</td>
							<td><input type="text" name="cgpa" ></td>
						</tr>
						<tr>
							<td>Department</td>
							<td><input type="text" name="dept" ></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Submit">&emsp;<input type="button" class="btn btn-danger btn-sm" id="btn" value="Back"></td>
						</tr>
					</table>
					
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>