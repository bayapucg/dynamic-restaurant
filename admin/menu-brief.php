<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Menu</h4>
						</div>
						
					
					</div>
					<div  class="row">
					<div class="col-lg-6">
					<div class="form-group">
											<label>Upload Banner</label>
											 <input type="file" class="form-control" >
										</div>
					</div>
					<div class="col-lg-6">
					<div class="form-group">
      <label>Title:</label>
      <input type="text" class="form-control"placeholder="Enter title...." value="fruit" >
	  </div>
					</div>
					
					</div>
					<div  class="row">
					<div class="col-lg-12">
					<h4 class="text-primary">Menu </h4></div>
					<div class="col-lg-6">
					<div class="form-group">
      <label>MenuType:</label>
      <select class="form-control">
        <option>Menu type</option>
        <option>Menu</option>
        <option>Daily special</option>
      </select>
	  </div>
					</div>
					<div class="col-lg-6">
					<div class="form-group">
      <label>FoodType:</label>
      <select class="form-control">
        <option>Select food type</option>
        <option>Breakfast</option>
        <option>Lunch</option>
        <option>Snaks</option>
        <option>Dinner</option>
      </select>
	  </div>
					</div>
					
					</div>
					<form id="defaultForm" method="post" class="m-b-30" action="menu-brief.php">
					<div class="row"> 
								<div class="col-md-12"> 
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="text-center">
													Image
												</th>
												<th class="text-center">
													Name
												</th>
												<th class="text-center">
													Description
												</th>
												<th class="text-center">
													Price
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
												<input type="text" name='name0'  placeholder='Enter Description' class="form-control" value="this is a fruit"/>
												</td>
												<td>
												<input type="number" name='name0'  placeholder='Enter Price' class="form-control" value="100"/>
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
      $('#addr'+i).html("<td><input name='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder='Enter Name'  class='form-control input-md'></td><td><input  name='mail"+i+"' type='text' placeholder='Enter Description'  class='form-control input-md'></td></td><td><input  name='mail"+i+"' type='number' placeholder='Enter Price'  class='form-control input-md'></td>");

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



