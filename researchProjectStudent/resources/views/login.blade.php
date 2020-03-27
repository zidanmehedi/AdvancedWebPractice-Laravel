<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='/css/main.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
				<span class="login100-form-title-1">
					Sign In
				</span>
			</div>
			
			<form class="login100-form validate-form"  style="padding-bottom: 25px" method="POST">
				<!-- if(.......) -->
			 	<div class="alert alert-warning" role="alert" style="width: 100%;padding-top:2px; padding-bottom:2px;"> 
                    <div class="panel-body">
                        <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                            <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                                <strong>Invalid User Id or Password</strong>
                            </div>
                        </div>
                     </div>
                </div>
				<!-- else if(.......) -->
				<!-- <div class="panel panel-info" style="width: 100%"> 
				    <div class="panel-body" >
				             
				            <div class="form-group" >
				                <div class="col-md-9" >
				                    <center>
				                    	<span style="color: red; padding-left: 95px;">Inactive Account</span>
				                    </center>
				                </div>
				            </div>
				     </div>
				</div> -->
				 <!-- else -->
				 <!-- <div></div> -->
				 <!-- end -->

				<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
					<input class="input100" type="text" name="uname" placeholder="Enter UserId">

					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">

					<input class="input100" type="password" name="password" placeholder="Enter Password" value="">
					<span class="focus-input100"></span>
				</div>

				<div class="alert  mt-5" role="alert" style="width: 100%;padding-top:2px; padding-bottom:0px;">           
                    <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                        <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                            <input type="submit" class="btn btn-primary" id="onHover" value="Login" style="width: 200px;">
                        </div>
                    </div> 
                </div>

                <div class="alert" role="alert" style="width: 100%;padding-top:0px; padding-bottom:0px;">   
                    <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                        <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                            <a href="{{route('studentReg')}}" class="txt1">Not Registered Yet?</a>
                        </div>
                    </div>    
                </div>
			</form>
		</div>
	</div>
</div>
	
<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>

</body>
</html>