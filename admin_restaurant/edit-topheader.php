<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Top Header</h4>
			</div>
		</div>
		<form id="defaultForm" method="post" class="m-b-30" action="topheader.php">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Address</label>
						<input type="text" class="form-control" value="Plot No. 177, Sri Vani Nilayam, Hyderabad.
"></input>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" class="form-control" value="850022xxxx" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h4 class="text-primary">Social Connect</h4>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>facebook Link</label>
							<input type="text" class="form-control" placeholder="Enter facebook Link">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Twitter Link</label>
								<input type="text" class="form-control" placeholder="Enter Twitter Link">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Google+ Link</label>
									<input type="text" class="form-control" placeholder="Enter Google+ Link">
									</div>
								</div>
							</div>
							<div class="m-t-20 text-center">
								<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php include("footer.php"); ?>