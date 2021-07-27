<!DOCTYPE html>
<html>
<head>
	<title>Patient BSL </title>
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
	<?php 
	include("db.php");
session_start();
if(isset($_POST['bsls'])){
		// $ipd=$_POST['ipd'];
		// $pn=$_POST['pn'];
		// $bsl=$_POST['bsl'];
		// $insl=$_POST['insl'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO bsl (ipd, pn, bsl, insl)
VALUES ('$_POST[ipd]', '$_POST[pn]', '$_POST[bsl]', '$_POST[insl]')";

if (mysqli_query($conn, $sql)) {
 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col col-md-6 col-sm-12">
				<form class="form p-3" method="POST" action="">
					<center><h2>BSL Form </h2></center>
					<div class="form-group">
						<label class="form-label">IPD</label>
						<input type="text" name="ipd" class="form-control" placeholder="IPD">
					</div>
					<div class="form-group">
						<label class="form-label">Patient Name</label>
						<input type="text" name="pn" class="form-control" placeholder="pn">
					</div>
					<div class="form-group">
						<label class="form-label">BSL in mg/dl</label>
						<input type="number" name="bsl" class="form-control" placeholder="BSL mg/dl">
					</div>
					<div class="form-group">
						<label class="form-label">Insuline given</label>
						<input type="number" name="insl" class="form-control" placeholder="Insuline">
					</div>
					<div class="form-group">
						<input type="submit" name="bsls" class="btn btn-primary w-75" style="margin-left: 10%; margin-top: 15%;">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>