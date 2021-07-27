
<?php 
	session_start();
	if ($_SESSION["auth"]=="admin") {
		
	}
	else{
		header("location:admin.php");
	}
?><!DOCTYPE html>
<html>
<head>
	<title>Add New Staff</title>
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
				<form class="form" action="" method="POST">
					<center><h3>Register New Staff</h3></center>
					<div class="form-group">
						<label class="form-label">Name:-</label>
						<input type="text" name="name" class="form-control" placeholder="Name Of Employee">
					</div>
					<div class="form-group">
						<label class="form-label">Mobile Number</label>
						<input type="number" name="mobile" class="form-control" placeholder="Mobile Number Details ">

					</div>
					<div class="form-group">
						<label class="form-label">Position Applied For </label>
						<input type="text" name="position" class="form-control" placeholder="Position">
					</div>
					<div class="form-group">
						<label class="form-label">DOB</label>
						<input type="date" name="dob" class="form-control" placeholder="DOB">
					</div>
					<div class="form-group">
						<label class="form-label">Aadhar Number</label>
						<input type="number" name="adhar" class="form-control" placeholder="Adhar">
					</div>
					<div class="form-group">
						<label class="form-label">Highest Education</label>
						<input type="text" name="education" class="form-control" placeholder="Highest Education">
					</div>
					<div class="form-group">
						<label class="form-label">Experience</label>
						<input type="text" name="experience" class="form-control" placeholder="Experience ">
					</div>
					<div class="form-group">
						<label class="form-label">Department Offered</label>
						<select class="form-select" name="department">
							<option value="doctor">Doctor</option>
							<option value="nursing">Nursing</option>
							<option value="wardboy">Ward Boy</option>
							<option value="lab">Lab</option>
							<option value="pharma">Pharma</option>
						</select>
					</div>
					<div class="form-group">
						<label class="form-label">Login ID </label>
						<input type="lid" name="lid" class="form-control" placeholder="Login ID ">
					</div>
					<div class="form-group">
						<label class="form-label">Password</label>
						<input type="password" name="pass" class="form-control" placeholder="pass">
					</div>
					<div class="form-group">
						<input type="submit" name="newstaff" value="Register" class="btn btn-success w-75" style="margin-left: 10%">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>