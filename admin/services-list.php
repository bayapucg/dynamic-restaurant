<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Services</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="services.php" class="btn btn-primary pull-right rounded" ><i class="fa fa-plus"></i> Add Services</a>
						
						</div>
					</div>
					<form>
					
					<div class="row">
						<div class="col-md-12 bg-white">
						<div class="clearfix">&nbsp;</div>
						<div class="table-responsive">
						<table class="table table-bordered table-striped">
						
						</table>
						</div>
							<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Service No</th>
											<th>Banner</th>
											<th>Image</th>
											<th>Heading</th>
											<th>Paragraph</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										
									
										<tr>
											<td>
												1
											</td>
											<td>
												<img class="img-responsive" src="assets/img/fruit.jpeg" alt="" style="height:50px;width:auto;">
											</td>
											<td>
												<img class="img-responsive" src="assets/img/fruit.jpeg" alt="" style="height:50px;width:auto;">
											</td>
											<td>heading</td>
											<td >
												Lorem Ipsum is simply dummy text of the printing. 
											</td>
											<td class="text-right">
												<button type="button" class="btn btn-danger">Delete</button>
												<a href="edit-servicesbrief.php"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button></a>
											</td>
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
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


