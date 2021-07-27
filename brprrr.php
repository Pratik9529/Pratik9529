<!DOCTYPE html>
<html>
<head>
	<title>Patient BSL RR BP </title>
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
			<div class="col col-md-6 col-sm-12">
				<form class="form p-3">
					<center><h2>BSL BP RR</h2></center>
					<div class="form-group">
						<label class="form-label">IPD no</label>
						<input type="text" name="ipd" class="form-control" placeholder="IPD number">
					</div>
					<div class="form-group">
						<label class="form-label">Patient Name</label>
						<input type="text" name="pn" class="form-control" placeholder="Patient Name">
					</div>
					<div class="form-group">
						<div class="row mt-2 mb-2">
							<div class="col">
								<label class="form-label">SPO2</label>
							</div>
							<div class="col">
								<input type="number" name="spo2" class="form-control" placeholder="O2">
							</div>
						</div>
						<div class="row mt-2 mb-2">
							<div class="col">
								<label class="form-label">Temp</label>
							</div>
							<div class="col">
								<input type="text" name="tmp" class="form-control" placeholder="Temp">
							</div>
						</div>
						<div class="form-group">
							<div class="row mt-2 mb-2">
								<div class="col">
									<label class="form-label">BSL</label>
								</div>
								<div class="col">
									<input type="number" name="bsl" class="form-control" placeholder="BSL">
								</div>
							</div>
							<div class="row mt-2 mb-2">
								<div class="col">
									<label class="form-label">RR</label>
								</div>
								<div class="col">
									<input type="number" name="rr" class="form-control" placeholder="RR">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="form-label col">BP</label>
								<input type="text" name="bp" class="form-control col" placeholder="BP ">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="brs" class="btn btn-success w-75 m-3" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>