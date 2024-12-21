<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Prices List</h1>
            <?php message(); ?>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List</h3>  
            <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">                    
                    <!-- <li>
                            <div class="row search_regin2">
                              <?=form_open('priceslist/allpricelist/')?>
                                  <div class="col-md-6 col-lg-6 search_content">
                                      <select  id="category" class="form-control" name="category" style="width: 100%;">
                                            <option value=""></option>
                                            <?php foreach(pricescategory_list() as $key => $status) : ?>
                                            <option value="<?= $key ?>" <?php if (set_value('category') == $key) echo "selected=selected" ?>><?= $status ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                  </div>
                                  <div class="col-md-6 col-lg-6 search_btn">
                                  	
                                    <button type="submit" value="submit" name="submit" class="btn btn-primary mb-2 pa">Search</button>
                                    <a href="priceslist/" class="btn btn-default mb-2 pa">Cancel</a>
                                  </div>                                     
                                  <?=form_close()?>
                            </div>
                      </li> -->
	                    <li class="nav-item">
	                      <a class="nav-link" href="priceslist/create_form" ><i class="fa fa-plus"></i> New</a>
	                    </li>
                  </ul>
                </div>             
          </div>
          <!-- /.card-header -->
          <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <tr>
                        <th width="30">#</th>
                        <th width="150">broker</th>
                        <th>Reg</th>
                        <th>Make/Model</th>
                        <th>GST</th>
                        <th>Col</th>
                        <th>OMV/eTran</th>
                        <th>UL</th>
                        <th>TON</th>
                        <th>VehNo</th>
                        <th>Q</th>
                        <th>RdTx</th>
                        <th>IU</th>
                        <th>Price</th>
                        <th>LOC</th>
                        <th width="100">Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
														
				                    foreach($priceslist->result() as $row):
				                  ?>  
						                <tr>
						                	<td><?php echo $i; ?></td>
						                	<td><?php echo $row->broker; ?></td>
						                	<td><?php echo $row->reg; ?></td>
						                	<td><?php echo $row->model; ?></td>
						                	<td><?php echo $row->gst; ?></td>
						                	<td><?php echo $row->col; ?></td>
						                	<td><?php echo $row->omv; ?></td>
						                	<td><?php echo $row->ul; ?></td>
						                	<td><?php echo $row->ton; ?></td>
						                	<td><?php echo $row->vehno; ?></td>
						                	<td><?php echo $row->Q; ?></td>
						                	<td><?php echo $row->rdtx; ?></td>
						                	<td><?php echo $row->iu; ?></td>
						                	<td><?php echo $row->price; ?></td>
						                	<td><?php echo $row->loc; ?></td>
															<td style="vertical-align:top">
																	<a href="<?php echo base_url() .'priceslist/edit_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                      <i class="fa fa-edit"></i>
                                  </a>

																	<a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'priceslist/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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
          <!-- /.card-body -->
          <!-- <div class="card-footer">
          		<?php echo $this->pagination->create_links(); ?>
          </div> -->
          <!-- card footer -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>



<div class="modal fade" id="modal-new-pricelist" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      	 <form method="post" enctype="multipart/form-data" action="<?php echo site_url('priceslist/upload_file') ?>">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Add Prices</h4>
		        </div>
		        <div class="modal-body">
		          		<div class="form-group">
		                        <label>File</label>
		                        <input type="file" name="fileupload" class="form-control">
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