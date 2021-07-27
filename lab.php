<?php 
	session_start();
	if ($_SESSION["auth"]=="admin") {
		
	}
	else{
		header("location:admin.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lab Details </title>
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
				<div class="col-md-6 col-sm-12">
					<form class="form" method="POST" action="">
						<center><h2>Lab Details</h2></center>
						<div class="form-group">
							<label class="form-label">IPD</label>
							<input type="text" name="ipd" class="form-control" placeholder="IPD number">
						</div>
						<div class="form-group">
							<label class="form=-label">Bed NO </label>
							<input type="text" name="bn" class="form-control" placeholder="Bed Number">
						</div>
						<div class="form-group">
							<label class="form-label">Patient Name</label>
							<input type="text" name="pn" class="form-control" placeholder="Patient Name">
						</div>

						<div class="form-group">
							<label class="form-label">CBC details</label>
							<hr>
							<div class="row mt-2 mb-2">
								<div class="col">
									<label class="form-label">HB</label>
								</div>
								<div class="col">
									<input type="number" name="hb" class="form-control" placeholder="HB">
								</div>
							</div>
							<div class="row mt-2 mb-2">
								<div class="col">
									<label class="form-label">WBC</label>
								</div>
								<div class="col">
									<input type="number" name="wbc" class="form-control" placeholder="WBC">
								</div>
							</div>
							<div class="row mt-2 mb-2">
								<div class="col">
									<label class="form-label">Platelets</label>
								</div>
								<div class="col">
									<input type="number" name="plt" class="form-control" placeholder="Platelets">
								</div>
							</div>
							<div class="row mt-2 mb-2">
								<div class="col">
									<label class="form-label">N/L Radio</label>
								</div>
								<div class="col">
									<input type="number" name="nl" class="form-control" placeholder="NL Radio">
								</div>
							</div>
							<hr>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col">
							<label class="form-label">LDH</label>
							<input type="number" name="ldh" class="form-control" placeholder="LDH">
						</div>
						<div class="col">
							<label class="form-label">CRP</label>
							<input type="number" name="crp" class="form-control" placeholder="CRP">
						</div>
					</div>
				</div>
				<div class="form-group">
							<div class="row">
								<div class="col">
							<label class="form-label">Sr ferritin</label>
							<input type="number" name="srf" class="form-control" placeholder="Sr ferritin">
						</div>
						<div class="col">
							<label class="form-label">D Dimer</label>
							<input type="number" name="ddmr" class="form-control" placeholder="D Dimer">
						</div>
					</div>
				</div>
				<div class="form-group">
							<div class="row">
								<div class="col">
							<label class="form-label">LFT</label>
							<input type="number" name="lft" class="form-control" placeholder="LFT">
						</div>
						<div class="col">
							<label class="form-label">RFT</label>
							<input type="number" name="rft" class="form-control" placeholder="CRP">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="form-label">Remark If Any </label>
					<input type="text" name="rmrk" class="form-control" placeholder="Remark If Any">
				</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>