<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-sm-6">
			<h1>Vehicles's Functions</h1>
			<?php message(); ?>
		  </div>
          
		</div>
	  </div><!-- /.container-fluid -->
	</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
	<div class="row">
			<div class="col-md-12">
				<div class="card card-default">
					<div class="card-header">
						<h3 class="card-title">Fuel Type</h3>
						<div class="card-tools">
							  <ul class="nav nav-pills ml-auto">                    
								<li class="nav-item">
								  <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#modal-new-fuelform"><i class="fa fa-plus"></i> New</a>
			                        
								</li>
							  </ul>
						</div> 
					</div>
					<div class="card-body">
						<table id="example2" class="table table-bordered table-hover">
							  <thead>
							  <tr>
								<tr>
									 <th>#</th>
									<th>Fuel Type</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							  </tr>
							  </thead>
							  <tbody>
									<?php
									$i=1;
										foreach($fueltype->result() as $row):
									?> 
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row->fuel_type; ?></td>
											<td><?php echo $row->created_date; ?></td>
											<td>
												<a data-id="<?= $row->id ?>" type="button" href="javascript:void(0);" class="edit-fueltype btn btn-primary btn-xs color-white">
													<i class="fa fa-edit"></i> 
												</a>
												<a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'functions/delete_fueltype/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
													<i class="fa fa-trash"></i> 
												</a>
											</td>
										</tr>    
								<?php
								$i++;
								endforeach; ?>    
			                        
							  </tbody>
							</table>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card card-default">
					<div class="card-header">
						<h3 class="card-title">Body Type</h3>
						<div class="card-tools">
							  <ul class="nav nav-pills ml-auto">                    
								<li class="nav-item">
								  <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#modal-new-bodyform"><i class="fa fa-plus"></i> New</a>
			                        
								</li>
							  </ul>
						</div> 
					</div>
					<div class="card-body">
						<table id="example2" class="table table-bordered table-hover">
							  <thead>
							  <tr>
								<tr>
									<th>#</th>
									<th>Body Type</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							  </tr>
							  </thead>
							  <tbody>
									<?php
									$i=1;
										foreach($bodytype->result() as $row):
									?> 
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row->body_type; ?></td>
											<td><?php echo $row->created_date; ?></td>
											<td>
												<a data-id="<?= $row->id ?>" type="button" href="javascript:void(0);" class="edit-bodytype btn btn-primary btn-xs color-white">
													<i class="fa fa-edit"></i> 
												</a>
												<a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'functions/delete_bodytype/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
													<i class="fa fa-trash"></i> 
												</a>
											</td>
										</tr>    
								<?php
								$i++;
								endforeach; ?>    
			                        
							  </tbody>
							</table>
					</div>
				</div>
			</div>


	  </div>
	<!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
	
		
	
<!-- Model Popup  -->

<div class="modal fade" id="modal-new-fuelform" role="dialog">
	<div class="modal-dialog">

	  <div class="modal-content">
		 <form method="post" id="fuelform" enctype="multipart/form-data">
				<div class="modal-header">
		          
				  <h4 class="modal-title">Add Fuel Type</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
						<div class="form-group">
								<label>Fuel Type</label>
								<input type="text" name="n_fueltype" class="form-control" placeholder="Fuel Type" required>
						</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  <button type="submit" class="btn btn-success">Save</button>
					</div>
				</div>
		</form>
	  </div>
      
	</div>
</div>

<!--  Add Business  -->
<div class="modal fade" id="modal-new-business" role="dialog">
	<div class="modal-dialog">    
	  <!-- Modal content-->
	  <div class="modal-content">
		 <form method="post" id="upload_businessform" enctype="multipart/form-data;charset=utf-8">
				<div class="modal-header">
		          
				  <h4 class="modal-title">Add Business Text</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
						<div class="form-group">
								<label>Title</label>
								<input type="text" name="title" id="title" class="form-control" placeholder="Title" required="">
						</div>
						<div class="form-group">
								<label>Photo</label>
								<input type="file" name="photo" id="photo" class="form-control"multiple="true" accept="image/*" >
						</div>
						<div class="form-group">
								<label>Description</label>
								<textarea name="description" id="description1" class="form-control" required=""></textarea>
								<script>
								CKEDITOR.replace( 'description1' );
									</script>
						</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  <button type="submit" id="businessform" class="btn btn-success">Save</button>
					</div>
				</div>
		</form>
	  </div>
      
	</div>
</div>

<!-- Edit Business Modal -->
<div class="modal fade" id="modal-edit-business" role="dialog">
	<div class="modal-dialog">
    
	  <!-- Modal content-->
	  <div class="modal-content">
		 <form method="post" id="upload_editbusiness" enctype="multipart/form-data;charset=utf-8" action="<?php echo site_url('Dashboard/update_business') ?>">
				<div class="modal-header">
		          
				  <h4 class="modal-title">Edit Business</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
						<input type="hidden" value="" name="id"/> 
						<div class="form-group">
								<label>Title</label>
								<input type="text" name="title" id="title" class="form-control" required>
						</div>
		                
						<div class="form-group" id="photo-preview">
							<label>Photo</label>
							<div>
									(No photo)
									<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label id="label-photo">Upload Photo </label>
							<div>
									<input name="photo" type="file" class="form-control" multiple="true" accept="image/*">
									<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
								<label>Description</label>		                       
								<textarea cols="80" id="business_description" name="business_description" rows="10">
									<?php echo $page_content->message1; ?>
												</textarea>
												<script>

													CKEDITOR.replace('business_description');

												</script>
						</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  <button type="submit" id="brandsform" class="btn btn-success">Update</button>
					</div>
				</div>
		</form>
	  </div>
      
	</div>
</div>
<!-- end edit business -->

<div class="modal fade" id="modal-edit-fuelform" role="dialog">
	<div class="modal-dialog">
    
	  <!-- Modal content-->
	  <div class="modal-content">
		 <form method="post" action="<?php echo site_url('functions/update_fueltype') ?>">
				<div class="modal-header">
		          
				  <h4 class="modal-title">Update Fuel Type</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
						<input type="hidden" value="" name="id"/> 
						<div class="form-group">
								<label>Fuel Type</label>
								<input type="text" name="fueltype" class="form-control" placeholder="Fuel Type" required>
						</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  <button type="submit" class="btn btn-success">Update</button>
					</div>
				</div>
		</form>
	  </div>
      
	</div>
</div>
<!-- end fuel -->

<div class="modal fade" id="modal-new-bodyform" role="dialog">
	<div class="modal-dialog">
  
	  <div class="modal-content">
		 <form method="post" id="bodyform" enctype="multipart/form-data">
				<div class="modal-header">
		          
				  <h4 class="modal-title">Add Body Type</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">		        		
						<div class="form-group">
								<label>Body Type</label>
								<input type="text" name="n_bodytype" class="form-control" placeholder="Body Type" required>
						</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  <button type="submit" class="btn btn-success">Save</button>
					</div>
				</div>
		</form>
	  </div>
      
	</div>
</div>

<div class="modal fade" id="modal-edit-bodyform" role="dialog">
	<div class="modal-dialog">
    
	  <!-- Modal content-->
	  <div class="modal-content">
		 <form method="post" action="<?php echo site_url('functions/update_bodytype') ?>">
				<div class="modal-header">
		          
				  <h4 class="modal-title">Edit Vehicle Body Type</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
						<input type="hidden" value="" name="id"/> 
						<div class="form-group">
								<label>Body Type</label>
								<input type="text" name="bodytype" id="bodytype" class="form-control" >
						</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  <button type="submit" class="btn btn-success">Update</button>
					</div>
				</div>
		</form>
	  </div>
      
	</div>
</div>
<!-- end car body -->


<!-- Vehicle Category -->
<div class="modal fade" id="modal-new-category" role="dialog">
	<div class="modal-dialog">
  
	  <div class="modal-content">
		 <form method="post" id="upload_category">
				<div class="modal-header">
		         
				  <h4 class="modal-title">Add Vehicle Category Title</h4>
				   <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">		        		
						<div class="form-group">
								<label>Vehicle Category Title Name</label>
								<input type="text" name="category" id="category" class="form-control" placeholder="Name" required>
						</div>
				</div>
				<div class="modal-footer">
					<div class="form-group">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  <button type="submit" id="categoryform" class="btn btn-success">Save</button>
					</div>
				</div>
		</form>
	  </div>
      
	</div>
</div>

<div class="modal fade" id="modal-edit-category" role="dialog">
	<div class="modal-dialog">

	  <div class="modal-content">
		 <form method="post" action="<?php echo site_url('Dashboard/update_category') ?>">
				<div class="modal-header">
                  
				  <h4 class="modal-title">Update Vehicle Category Title</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
						<input type="hidden" value="" name="id"/> 
						<div class="form-group">
								<label>Vehicle Category Title Name</label>
										<input type="text" name="category" id="category" class="form-control" placeholder="Name" required>
						</div>
                        
				</div>
				<div class="modal-footer">
					<div class="form-group">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  <button type="submit" class="btn btn-success">Update</button>
					</div>
				</div>
		</form>
	  </div>
      
	</div>
</div>

<!-- end category -->