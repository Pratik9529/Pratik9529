<!DOCTYPE html>
<html>
<head>
	<title>Patient Medication Form </title>
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
		<div class="row no gutter">
		<div class="col-md-6 col-sm-12 p-4">
			<form class="form" method="POST">
				<center><h2>Medication Form</h2></center>
				<div class="form-group">
					<label class="form-label">IPD no</label>
					<input type="text" name="ipd" class="form-control" placeholder="IPD no">
				</div>
				<div class="form-group">
					<label class="form-label">Bed Number</label>
					<input type="text" name="bn" class="form-control" placeholder="Bed Number">
				</div>
				<div class="form-group">
					<label class="form-label">Patient Name</label>
					<input type="text" name="pn" class="form-control" placeholder="Patient Name">
				</div>
				<div class="form-group">
					<label class="form-label">Fresh Complaint</label>
					<input type="text" name="fc" class="form-control" placeholder="Patient Name">
				</div>
				<div class="form-group">
					<label class="form-label">Antibiotic</label>
					<input type="text" class="form-control mb-3" style="" name="an" placeholder="Name of Injection" aria-label="First name">
					<div class="row">
 
  <div class="col">
    <select class="form-select" name="af">
    	<option value="OD">OD</option>
    	<option value="TDS">TDS</option>
    	<option value="BD">BD<option>
    </select>
  </div>
  <div class="col">
    <input type="text" class="form-control" name="ad" placeholder="Dose Day" aria-label="Last name">
  </div>
</div>
					
				
				</div>
				<div class="form-group">
					<label class="form-label"> MPS Dose</label>
					<div class="row">
  <div class="col">
    <select class="form-select" name="mw">
    	<option value="">IV/ Tablet</option>
    	<option value="injection">Injection</option>
    	<option value="Tablet">Tablet</option>
    </select>
  </div>
   <div class="col">
    <select class="form-select" name="mf">
    	<option value="OD">OD</option>
    	<option value="TDS">TDS</option>
    	<option value="BD">BD<option>
    </select>
  </div>
  <div class="col">
    <input type="text" name="md" class="form-control" placeholder="Day" aria-label="Last name">
  </div>
</div>
				</div>
				<div class="form-group">
					<label class="form-label"> Lomoh Dose</label>
					<div class="row">
  
   <div class="col">
    <select class="form-select">
    	<option value="OD">OD</option>
    	<option value="TDS">TDS</option>
    	<option value="BD">BD<option>
    </select>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Day" aria-label="Last name">
  </div>
</div>
				</div>
				<!-- <div class="form-group">
					<label class="form-label">HRCT Details</label>
					<div class="row">
						<div class="col">
							<input type="date" name="hd" class="form-control">
						</div>
						<div class="col">
							<input type="text" name="hs" class="form-control" placeholder="score">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="form-label">Lab Details</label>
					<div class="row">
						<div class="col">
							<input type="date" name="ld" class="form-control">
						</div>
						<div class="col">
							<input type="text" name="hb" class="form-control" placeholder="HB">
						</div>
						
					</div>
					<div class="row mt-3 mb-1" style="">
						<div class="col">
							<input type="text" name="wbc" class="form-control" placeholder="WBC">
						</div>
						<div class="col">
							<input type="text" name="plt" class="form-control" placeholder="Platelets">
						</div>

					</div>
					<div class="row mt-3 mb-1" style="">
						<div class="col">
							<input type="text" name="nl" class="form-control" placeholder="N/L Radio">
						</div>
						<div class="col">
							<input type="text" name="ldh" class="form-control" placeholder="LDH">
						</div>

					</div>
					<div class="row mt-3 mb-1" style="">
						<div class="col">
							<input type="text" name="crp" class="form-control" placeholder="CRP">
						</div>
						<div class="col">
							<input type="text" name="ddmr" class="form-control" placeholder="D-Dimer">
						</div>

					</div>
					<div class="row mt-3 mb-1" style="">
						<div class="col">
							<input type="text" name="lft" class="form-control" placeholder="LFT">
						</div>
						<div class="col">
							<input type="text" name="rft" class="form-control" placeholder="RFT">
						</div>

					</div>
				</div>
				<div class="form-group">
					<label class="form-label">Blood Sugar Level</label>
					<div class="row mt-3 mb-1">
						<div class="col">
							<input type="text" name="bsl" class="form-control" placeholder="BSL mg/dl">
						</div>
					</div>
					<div class="row mt-3 mb-1">
						<div class="col">
							<input type="submit" name="ms" class="btn btn-lg btn-primary w-75" value="Submit" style="margin-left: 10%;">
						</div>
					</div>
				</div> -->
			</form>
		</div>
	</div>
	</div>
</body>
</html>