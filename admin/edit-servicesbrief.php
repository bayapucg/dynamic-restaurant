<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Services</h4>
						</div>
					
					
					</div>
					<form id="defaultForm" method="post" class="m-b-30" action="services-home.php">
					
								<div class="row"> 
								<div class="col-md-6"> 
										<div class="form-group">
											<label>Upload Banner</label>
											 <input type="file" class="form-control" >
										</div>
									</div>
								<div class="col-md-12"> 
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="text-center">
													Image
												</th>
												<th class="text-center">
													Title
												</th>
												<th class="text-center">
													Paragraph
												</th>
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td>
													<input type="file" class="form-control">
												</td>
												<td>
												<input type="text" name='name0'  placeholder='Enter Name' class="form-control"value="fruit"/>
												</td>
												<td>
												<input type="text" name='name0'  placeholder='Enter Paragraph' style="max-width=100ch" class="form-control" value="hyderabad plat no:104"/>
												</td>
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>	
									<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
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
<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Enter Name'  class='form-control input-md'></td><td><input  name='mail"+i+"' type='text' placeholder='Enter Paragraph'  class='form-control input-md'></td>");

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



