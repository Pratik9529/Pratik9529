<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		.form-group{
			padding: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<form class="form pt-5 mt-5" method="POST" action="#">
					<center><h2>Login Here !!!</h2></center>
				<div class="form-group">
					<label class="form-label">Login ID</label>
					<input type="text" name="lid" class="form-control" placeholder="Login ID Please">
				</div>
				<div class="form-group">
					<label class="form-label">Password</label>
					<input type="password"  name="pass" class="form-control" placeholder="Password">
				</div>
				<!-- <div class="form-group">
					<label class="form-label">Authority</label>
					<select class="form-control"  name="auth">
						<option value="Admin">Admin</option>
						<option value="Nursing">Nursing</option>
						<option value="lab"> Lab</option>
						<option value="HRCT">HRCT</option>
					</select>
				</div>
				<div class="form-group">
					<label class="form-label">Staff Name:-</label>
					<input type="text" name="sname" class="form-control" placeholder="Staff Name">
				</div> -->
				<div class="form-group">
					<input type="submit" name="login" class="btn btn-primary w-75 mt-5" value="Login" style="margin-left: 10%;">
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
<?php 
session_start();
if(isset($_POST['lid'])&&isset($_POST['pass'])){
		$lid = $_POST['lid'];
		$pass = $_POST['pass'];
		if($lid=="Admin" && $pass="1234"){
		$_SESSION["auth"]="admin";
		}
		if ($_SESSION["auth"]=="admin"){
			
			header("location:admin.php");
		}
	

	}
	?>
</html>
