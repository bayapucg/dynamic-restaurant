<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">menu</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="menu.php" class="btn btn-primary pull-right rounded" ><i class="fa fa-plus"></i> Add Menu</a>
						
						</div>
					</div>
					<form>
					
					<div class="row">
						<div class="col-md-12 bg-white">
						<div class="clearfix">&nbsp;</div>
							<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Banner</th>
											<th>title</th>
											<th>menu title</th>
											<th>food type</th>
											<th >menu Image</th>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										
									
										<tr>
										<td>
												<img class="img-responsive" src="assets/img/fruit.jpeg" alt="" style="height:50px;width:auto;">
											</td>
											<td>fruit</td>
										<td>food go</td>
										<td>Break fast</td>
											<td>
												<img class="img-responsive" src="assets/img/fruit.jpeg" alt="" style="height:50px;width:auto;">
											</td>
											
											<td>fruit</td>
											<td>Lorem Ipsum is simply dummy text of the printing . </td>
											<td>100</td>
											<td class="text-right">
												<button type="button" class="btn btn-danger">Delete</button>
												<a href="menu-brief.php"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button></a>
											</td>
										</tr>
										<tr>
										<td>
												<img class="img-responsive" src="assets/img/fruit.jpeg" alt="" style="height:50px;width:auto;">
											</td>
											<td>fruit</td>
										<td>food go</td>
										<td>Break fast</td>
											<td>
												<img class="img-responsive" src="assets/img/flower.jpeg" alt="" style="height:50px;width:auto;">
											</td>
											
											<td>flower</td>
											<td>Lorem Ipsum is simply dummy text of the printing . </td>
											<td>50</td>
											<td class="text-right">
												<button type="button" class="btn btn-danger">Delete</button>
												<a href="menu-brief.php"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				
            </div>
			
			
			<div id="delete_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Employee</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this?</p>
								<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
<?php include("footer.php"); ?>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


