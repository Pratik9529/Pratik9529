<!DOCTYPE html>
<html>
<head>
	<title>HRCT</title>
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
					<form>
						<div class="form-group">
							<label class="form-label">IPD</label>
							<input type="number" name="ipd" class="form-control" placeholder="IPD number">
						</div>
						<div class="form-group">
							<label class="form-label">Patient Name:-</label>
							<input type="text" name="pn" class="form-control" placeholder="Patient Name">
						</div>
						<div class="form-group">
							<label class="form-label">Date</label>
							<input type="date" name="hd" class="form-control">
						</div>
						<div class="form-group">
							<label class="form-label">Score</label>
							<input type="text" name="hs" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="hrcts" class="btn btn-primary w-75" style="margin-left: 10%;">
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>