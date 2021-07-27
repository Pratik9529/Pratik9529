<!DOCTYPE html>
<html>
<head>
	<title>Patient Discharge</title>
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
		<div class="row no-gutter">
			<div class="col">
				<form class="form">
					<center><h2>Discharge Form</h2></center>
					<div class="form-group">
						<label class="form-label">IPD number</label>
						<input type="text" name="ipd" class="form-control" placeholder="IPD number">
					</div>
					<div class="form-group">
						<label class="form-label">Patient Name</label>
						<input type="text" name="patient" class="form-control" placeholder="Patient Name">
					</div>
					<div class="form-group">
						<label class="form-label">Discharge/reff Date</label>
						<input type="date" name="dd" class="form-control">
					</div>
					<div class="form-group">
						<label class="form-label">Discharge Type</label>
						<select class="form-select" name="dt">
							<option value="discharge">Discharge</option>
							<option value="DAMA discharge">DAMA Discharge</option>
							<option value="reffered">Reffered To</option>
						</select>
					</div>
					<div class="form-group">
						<label class="form-label">If Reffered to </label>
						<hr>
						<div class="form-group">
							<label class="form-label">Bed NO</label>
							<input type="text" name="bn" class="form-control" placeholder="Bed Number">
						</div>
						<div class="form-group">
							<label class="form-group">Hospital Name</label>
							<input type="text" name="hn" class="form-control" placeholder="Hospital Name">
						</div>
						<div class="form-group">
							<label class="form-label">SPO2</label>
							<input type="text" name="spo2" class="form-control" placeholder="SPO2">

						</div>

					</div>
					<div class="form-group">
						<input type="submit" name="discharge" class="btn btn-danger w-75" style="
						margin-left: 10%;" value="Discharge">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>