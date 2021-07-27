<?php 
	session_start();
	if ($_SESSION["auth"]=="admin") {
		
	}
	else{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<div class="col-md-6 col-sm-12">
			
			<div class="form-group mt-5 mb-2">
				<a href="newstaff.php" class="btn btn-primary w-75" style="margin-left: 10%;"><span class="fa fa-user mr-5" style="margin-right: 10%;"></span>Create A New User</a>
			</div>
			<div class="form-group mt-0 mb-2">
				<a href="viewstaff.php" class="btn btn-primary w-75" style="margin-left: 10%;"><span class="fa fa-users mr-5" style="margin-right: 10%;"></span> View Staff Details </a>
			</div>
			<div class="form-group mt-0 mb-2">
				<a href="viewpatient.php" class="btn btn-success w-75" style="margin-left: 10%"><span class="fa fa-users mr-5" style="margin-right: 10%;"></span>View Patient Details </a>
			</div>

		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<h3 class="text-danger"> Patients Need To Reffer </h3>
		</div>
	</div>
</div>
</body>
</html>