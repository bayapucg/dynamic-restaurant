<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">About Us</h4>
			</div>
			<div class="col-xs-8 text-right m-b-30">
				<a href="edit-aboutusbrief.php" class="btn btn-warning pull-right rounded" >
					<i class="fa fa-edit"></i> Edit 
				</a>
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
							<label>Enter Title</label>
							<input type="text" class="form-control" placeholder="Enter Title">
							</div>
						</div>
					</div>
				
					<form id="defaultForm" method="post" class="m-b-30" action="#">
						<div class="row">
							<div class="col-lg-12">
								<h4 class="text-primary">Add Paragraph</h4>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered table-hover" id="tab_logic">
									
									<tbody>
										<tr id='addr0'>
											<td>
												<textarea class="form-control" name="" placeholder="Enter Here..."></textarea>
												</td>
												
												</tr>
												<tr id='addr1'></tr>
											</tbody>
										</table>
										<a id="add_row" class="btn btn-default pull-left">Add Row</a>
										<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
								</div>
							</form>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><textarea name='name"+i+"' class='form-control input-md'></textarea> </td>");

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