<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<div class="page-wrapper">
	<div class="content container-fluid bg-white">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">Blog</h4>
			</div>
			<div class="col-xs-8 text-right m-b-30">
							<a href="edit-blog.php" class="btn btn-warning pull-right rounded" ><i class="fa fa-edit"></i> Edit </a>
						
						</div>
		</div>
		<form id="defaultForm" method="post" class="m-b-30" action="blog.php">
			<div class="row">
				<div class="col-md-9 col-md-offset-1">
					<table class="table table-bordered table-hover" id="tab_logic">
						<thead>
							<tr >
								<th class="text-center">
													Image
												</th>
								<th class="text-center">
													Date
												</th>
								<th class="text-center">
													procedure
												</th>
							</tr>
						</thead>
						<tbody>
							<tr id='addr0'>
								<td>
									<input type="file" class="form-control">
									</td>
									<td>
										<input type="date" name='name0'  placeholder='Enter date' class="form-control"/>
									</td>
									<td>
										<input type="text" name='name0'  placeholder='Enter procedure' class="form-control"/>
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
		</div>
	</div>


	<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='date' placeholder='Enter date'  class='form-control input-md'></td><td><input  name='mail"+i+"' type='text' placeholder='Enter Procedure'  class='form-control input-md'></td>");

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