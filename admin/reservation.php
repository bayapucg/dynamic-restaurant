<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Reservation</h4>
						</div>
					<div class="col-xs-8 text-right m-b-30">
							<a href="edit-reservationbrief.php" class="btn btn-warning pull-right rounded" ><i class="fa fa-edit"></i> Edit </a>
						
						</div>
					</div>
					<form id="defaultForm" method="post" class="m-b-30" action="aboutus.php">
								<div class="row"> 
									<div class="col-md-6"> 
										<div class="form-group">
											<label>Upload Banner</label>
											 <input type="file" class="form-control" >
										</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group">
											<label>Title</label>
											 <input type="text" class="form-control" placeholder="Enter Phone NUmber">
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



