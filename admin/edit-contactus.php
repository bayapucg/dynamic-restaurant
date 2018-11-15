<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Contact Us</h4>
						</div>
						
					
					</div>
					<form id="defaultForm" method="post" class="m-b-30" action="contactus.php">
					
								<div class="row"> 
								<div class="col-lg-12">
									<h4 class="text-primary">Contact us form Email</h4>
								</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email </label>
											<input type="text" class="form-control" placeholder="Enter Email id" value="pracha@gmail.com">
										</div>
										
										
									</div>
									<div class="col-lg-6">
									<div class="col-lg-12">
								<label>Opening Hours</label></div>
									</div>
									<div class="col-md-6">
										<div class="col-md-12"> 
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="text-center">
													Day
												</th>
												<th class="text-center">
													Time
												</th>
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td>
													<input type="text" class="form-control" value="monday">
												</td>
												<td>
												<input type="time" name='name0'  placeholder='Enter Name' class="form-control"/>
												</td>
												
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>	
									<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
								</div>
										
										
									</div>
									
								</div>
								<div class="row"> 
								<div class="col-lg-12">
								<h4 class="text-primary">Contact us </h4>
								</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone Number</label>
											<input type="Number" class="form-control" placeholder="Enter Phone Number" value="9495864512">
										</div>
										
										
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Email</label>
											<input type="text" class="form-control" placeholder="Enter Email" value="pracha@gmail.com">
										</div>
										
										
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control" value="Plot No. 177, Sri Vani Nilayam, Hyderabad.
"></input>
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
											<input type="text" class="form-control" placeholder="Enter facebook Link" value="facebook.com">
										</div>
										
										
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Twitter Link</label>
											<input type="text" class="form-control" placeholder="Enter Twitter Link" value="twitter.com">
										</div>
										
										
									</div>
									
								</div>
								<div class="row"> 
								
									
									<div class="col-md-6">
										<div class="form-group">
											<label>Google+ Link</label>
											<input type="text" class="form-control" placeholder="Enter Google+ Link" value="www.google.com">
										</div>
										
										
									</div>
									
								</div>
								<div class="m-t-20 text-center">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
																	</div>
							</form>
						
						</div>
					</div>
				</div>
			</div>
			<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='name"+i+"' type='text'  class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='time'   class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>
<?php include("footer.php"); ?>



