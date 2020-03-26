

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
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
				<h1>User list</h1>
			</div>
		</div>

		<div class="row justify-content-lg-center justify-content-sm-center justify-content-md-center mt-5">
			<div class="col-lg-auto col-md-auto col-sm-auto">
				<table class="table table-dark table-striped table-hover" style="text-align: center">
					<thead>
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>ACTION</th>
						</tr>
					</thead>

					<!-- @for($i=0; $i < count($std); $i++)
					<tr>
						<td>{{ $std[$i]['id'] }}</td>
						<td>{{ $std[$i]['name'] }}</td>
						<td>{{ $std[$i]['cgpa'] }}</td>
						<td>{{ $std[$i]['dept'] }}</td>
					</tr>
					@endfor -->
					
					@foreach($std as $s)
					<tbody>
						<tr>
							<td>{{ $s['id'] }}</td>
							<td>{{ $s['name'] }}</td>
							<td>
								<a class="ml-2" href="{{route('home.show', $s['id'])}}">DETAILS</a>
								<a class="ml-2" href="{{route('home.edit', $s['id'])}}">EDIT</a>
								<a class="ml-2" href="{{route('home.delete', $s['id'])}}">DELETE</a>
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
			</div>
		</div>

		<div class="row justify-content-md-center justify-content-lg-center justify-content-sm-center mt-2">
			<div class="col-lg-auto col-sm-auto col-md-auto">
				<a class="alert-link" href="{{route('home.index')}}">Back</a>&emsp;
				<a class="alert-link" href="/logout">Logout</a> 
			</div>
		</div>
	</div>
</body>
</html>