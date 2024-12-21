<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insurance Form Centre</h1>
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
            <h3 class="card-title">Edit Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('insurance/update') ?>">
          <div class="card-body">
                
                <input type="hidden" name="id" value="<?php echo $insurance->id; ?>">
                <input type="hidden" name="category" value="<?php echo $insurance->category; ?>">
                <div class="row sm_padding">                
                    <div class="col-md-6">

                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>System ID</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="systemid" value="<?php echo $insurance->system_id; ?>" class="form-control" readonly>
                            </div>       
                        </div>   

                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>Category</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" value="<?php echo $insurance->name; ?>" class="form-control" readonly>
                            </div>       
                        </div> 
                        
                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>Remarks</label>
                            </div>
                            <div class="col-md-7">
                                <textarea name="remark" class="form-control" ><?php echo $insurance->remark;?></textarea>
                            </div>       
                        </div> 
                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>Document</label>
                            </div>
                            <div class="col-md-9" style="font-size: 14px;">
                                <?php
                                    $id=$insurance->id;
                                    $insurancefile=$this->db->query("SELECT * FROM insurance_files WHERE insurance_id=$id");                    
                                    foreach($insurancefile->result() as $row):
                                  ?>
                                
                                    <?php    if(file_exists('upload/insurance/'.$row->file)){ ?>
                                        <p>
                                            <a href="<?php echo base_url() .'upload/salesadmin/'.$row->file;?>" style="font-size: 14px;" target="_blank" class="filedelete">
                                            <?php echo $row->file."<br/>"; ?>
                                            </a>
                                            <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'insurance/delete_file/'.$row->id;?>" type="button" class="delete-file color-white">x
                                            </a>
                                        </p>                                                                                  
                                      <?php  } ?>
                                  <?php 
                                    endforeach; ?>
                                <input type="hidden" name="documentfile" value="<?php echo $insurance->file;?>">
                                <input type="file" name="document[]" class="form-control" multiple>
                            </div>       
                        </div> 
                    </div><!-- first col -->

                    <div class="col-md-6">
                        <p class="formtitle">Record Section</p>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Entry Date</label>
                            </div>
                            <div class="col-md-3">
                                <input type="date" name="entrydate" value="<?php echo $insurance->entry_date;?>" class="form-control" readonly>
                            </div>    
                            <div class="col-md-4 bootstrap-timepicker" >
                                <input type="text" name="entrytime" value="<?php echo $insurance->entry_time;?>" class="form-control" readonly>

                            </div>    
                        </div>     

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Created By</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="createbyname" value="<?php echo $insurance->created_by;?>" class="form-control" readonly>
                            </div>    
                            <div class="col-md-4">
                                <div class='input-group date'>
                                    <input type='text' name="createbydate" value="<?php echo $insurance->created_date;?>" class="form-control" readonly/>   
                                </div>
                            </div>    
                        </div> 

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Last Modified By</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="modifyname" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                            </div>    
                            <div class="col-md-4">
                                <div class='input-group date'>
                                    <input type='text' name="modifydate" value="<?php echo date('Y-m-d H:i:s'); ?>" class="form-control" readonly/>  
                                </div>
                            </div>   
                        </div> 
                    </div><!-- second col -->
                </div><!--  -->
                
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                        <a href="insurance/" class="btn btn-default mybtn">Cancel</a>
                        <button type="submit" class="btn mybtn btn-success">Update</button>
                    </div>                    
                </div>
          </div>
          <!-- /.card-footer -->
          </form>
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



<!-- Add Category -->
<div class="modal fade" id="modal-new-category" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Create Category</h4>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
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
<!-- end brands -->