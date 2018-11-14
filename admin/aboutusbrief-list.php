<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="row">
			<div class="col-xs-4">
				<h4 class="page-title">About Us</h4>
			</div>
			<div class="col-xs-8 text-right m-b-30">
				<a href="aboutus-brief.php" class="btn btn-primary pull-right rounded" >
					<i class="fa fa-plus"></i> Add About Us
				</a>
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
									<th style="width:10%;">Image</th>
									<th>Title</th>
									<th>Paragraph</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<img class="img-responsive" src="assets/img/fruit.jpeg" alt="" style="height:50px;width:auto;">
										</td>
										<td>fruit</td>
										<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
										<td class="text-right">
											<button type="button" class="btn btn-danger">Delete</button>
											<a href="edit-aboutusbrief.php">
												<button type="button" class="btn btn-warning">
													<i class="fa fa-edit"></i> Edit
												</button>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<img class="img-responsive" src="assets/img/flower.jpeg" alt="" style="height:50px;width:auto;">
											</td>
											<td>flower</td>
											<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
											<td class="text-right">
												<button type="button" class="btn btn-danger">Delete</button>
												<a href="edit-aboutusbrief.php">
													<button type="button" class="btn btn-warning">
														<i class="fa fa-edit"></i> Edit
													</button>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
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