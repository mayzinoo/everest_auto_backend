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
            <h3 class="card-title">Create Form</h3> 
            <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#modal-insurance-category"><i class="fa fa-plus"></i> Create Category</a>
                    </li>
                  </ul>
            </div>              
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('insurance/insert') ?>">
          <div class="card-body">
                
                <div class="row sm_padding">                
                    <div class="col-md-6">

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>System ID</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="systemid" class="form-control" readonly>
                            </div>       
                        </div>   

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Category</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" name="category" required>
                                    <option value="">&nbsp;</option>
                                    <?php foreach($getcategory as $catego) : ?>
                                    
                                    <option value="<?= $catego->id ?>"><?= $catego->name ?></option>
                                    
                                    <?php endforeach; ?>
                                </select>
                            </div>       
                        </div> 
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Document</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="document[]" class="form-control" multiple required>
                            </div>       
                        </div> 
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Remarks</label>
                            </div>
                            <div class="col-md-6">
                                <textarea name="remark" class="form-control" ></textarea>
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
                                <input type="date" name="entrydate" value="<?php echo date('Y-m-d');?>" class="form-control" readonly>
                            </div>    
                            <div class="col-md-4 bootstrap-timepicker" >
                                <input type="text" name="entrytime" value="<?php echo mdate('%h:%i %A');?>" class="form-control" readonly>
                            </div>     
                        </div>     

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Created By</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="createbyname" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                            </div>    
                            <div class="col-md-4">
                                <div class='input-group date'>
                                    <input type='text' name="createbydate" value="<?php echo date('Y-m-d H:i:s');?>" class="form-control" readonly/>
                                </div>
                            </div>    
                        </div> 

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Last Modified By</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="modifyname" class="form-control" readonly>
                            </div>    
                            <div class="col-md-4">
                                <div class='input-group date'>
                                    <input type='text' name="modifydate" class="form-control" readonly/>  
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
                        <button type="submit" class="btn mybtn btn-success">Save</button>
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
<div class="modal fade" id="modal-insurance-category" role="dialog">
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
<!-- end -->