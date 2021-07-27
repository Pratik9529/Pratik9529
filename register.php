<!DOCTYPE html>
<html>
<head>
	<title>Patient Admition Details</title>
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
if ($_SESSION["auth"]=="admin" || $_SESSION["auth"]=="reception") {
		
	}
	else{
		header("location:login.php");
	}
if(isset($_POST['prsub'])){
		

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO ipd (icmr,ipd,pn,pa,page,gender,refff,pmn,prn1,prm1,prn2,prm2,tt,td,hd,hs,fs,fsd,breath,spo2,rr,pr,bp,temp,vt,vd1,vd2,bsm,bn)
VALUES ('$_POST[icmr]', '$_POST[ipd]', '$_POST[pn]', '$_POST[pa]','$_POST[page]', '$_POST[gender]', '$_POST[refff]', '$_POST[pmn]','$_POST[prn1]', '$_POST[prm1]', '$_POST[prn2]', '$_POST[prm2]','$_POST[tt]', '$_POST[td]', '$_POST[hd]', '$_POST[hs]','$_POST[fs]', '$_POST[fsd]', '$_POST[breath]', '$_POST[spo2]','$_POST[rr]', '$_POST[pr]', '$_POST[bp]', '$_POST[temp]','$_POST[vt]', '$_POST[vd1]', '$_POST[vd2]','$_POST[bsm]', '$_POST[bn]')";

if (mysqli_query($conn, $sql)) {
 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	}
	?>
		<div class="container">
			<div class="row no-gutter">
				<div class="col-md-6 col-sm-12">
					<form class="form" method="POST" action="">
						<center><h2>Patient Registration</h2></center>
						<div class="form-group">
							<label class="form-label">ICMR / SRef</label>
							<input type="text" class="form-control" name="icmr" placeholder="ICMR Number">
						</div>
						<div class="form-group">
							<label class="form-label">IPD no</label>
							<input type="text" class="form-control" name="ipd" placeholder="IPD Number">
						</div>
						<div class="form-group">
							<label class="form-label">Patient Name</label>
							<input type="text" class="form-control" placeholder="Patient Name" name="pn">
						</div>
						<div class="form-group">
							<label class="form-label">Address</label>
							<textarea class="form-control" name="pa" placeholder="Patient Address">
								
							</textarea>
						</div>
						<div class="form-group row">
								<div class="col">
									<label class="form-label">Age</label>
								</div>
								<div class="col">
									<input type="number" name="page" class="form-control" placeholder="Age">
								</div>
								<div class="col">
									<label class="form-label">Gender</label>
								</div>
								<div class="col">
									<input type="radio" name="gender" value="male" class="form-check-input"><label class="form-check-laebl">M</label>
								</div>
								<div class="col">
									<input type="radio" name="gender" value="female" class="form-check-input"><label class="form-check-laebl">F</label>
								</div>
						</div>
						<div class="form-group">
							<label class="form-label">Reffered From </label>
									<input type="text" name="refff" class="form-control" placeholder="Reffered From">
						</div>
						<div class="form-group">
							<label class="form-label">Patient mobile Number </label>
							<input type="number" name="pmn" class="form-control" placeholder="mobile Number">
						</div>
						<div class="form-group">
							<label class="form-label">Relative Details </label>
							<div class="row mb-2 mt-2">
								<div class="col">
									<input type="text" name="prn1" class="form-control" placeholder="Relative 1">
								</div>
								<div class="col">
									<input type="number" name="prm1" class="form-control" placeholder="mobile Number">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<input type="text" name="prn2" class="form-control" placeholder="Relative 2">
								</div>
								<div class="col">
									<input type="number" name="prm2" class="form-control" placeholder="mobile Number">
								</div>
							</div>
						</div>
						<div class="form-group">
							Test Details 
							<div class="row">
								<div class="col">
									<select name="tt" class="form-select">
											<option value="RAT">RAT</option>
											<option value="RTPCR">RTPCR</option>
									 </select>
								</div>
								<div class="col">
											<input type="date" name="td" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">HRCT details</label>
								<div class="row">
									<div class="col">
										<input type="date" name="hd" class="form-control" placeholder="HRCT Date">
									</div>
									<div class="col">
										<input type="text" name="hs" class="form-control" placeholder="HRCT score">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">First Symptom</label>
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" name="fs" placeholder="Symptom">
									</div>
									<div class="col">
										<input type="date" name="fsd" class="form-control" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								
								<div class="row">
									<div class="col">
										<label class="form-label">Breathlessness</label>
									</div>
									<div class="col">
										<input type="radio" name="breath" value="yes">Yes
									</div>
									<div class="col">
										<input type="radio" name="breath" value="no">NO
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Vital Parameters</label>
										<div class="row mb-2 mt-2">
											<div class="col">
												<label class="form-label">SPO2:-</label>
											</div>
											<div class="col">
												<input type="number" name="spo2" class="form-control" placeholder="SPO2">
											</div>
											<div class="col">
														<label class="form-label">RR:-</label>
											</div>
											<div class="col">
												<input type="number" name="rr" class="form-control" placeholder="RR">
											</div>
										</div>
										<div class="row mb-2 mt-2">
											<div class="col">
												<label class="form-label">PR</label>
											</div>
											<div class="col">
												<input type="number" name="pr" class="form-control" placeholder="PR">
											</div>
											<div class="col">
														<label class="form-label">BP:-</label>
											</div>
											<div class="col">
												<input type="number" name="bp" class="form-control" placeholder="BP">
											</div>
										</div>
										<div class="row">
											<div class="col">
												<label class="form-label">Temp</label>
											</div>
											<div class="col">
												<input type="number" name="temp" class="form-control" placeholder="tmp">
											</div>
											<div class="col">
											</div>
											<div class="col">
											</div>
										</div>
							</div>
						</div>
						<div class="form-group">
						<label class="form-label">Vaccination Details</label>
						<div class="row">
							<div class="col">
								<select class="form-select" name="vt">
									<option>None</option>
									<option value="covishield">Covishield</option>
									<option value="covaxin">Covaxin</option>
								</select>
							</div>
							<div class="col mb-3">
										<input type="date" name="vd1" class="form-control">
							</div>
							<div class="col mt-2">
								<input type="date" name="vd2" class="form-control">
							</div>
						</div>
						</div>
						<div class="form-group">
							<label class="form-label">BP / Suger Medication:- </label>
							<div class="row">
								<div class="col">
									<input type="radio" name="bsm" value="yes">Yes 
								</div>
								<div class="col">
									<input type="radio" name="bsm" value="no">No 
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label class="form-label">Bed No:-</label>
								</div>
								<div class="col">
									<input type="text" name="bn" class="form-control" placeholder="BedNo">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<input type="submit" name="prsub" value="Register" class="btn btn-primary w-75" style="margin-left: 10%;">
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>