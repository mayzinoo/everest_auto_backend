<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Company's Detail</h1>
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
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('company/insert') ?>">
          <div class="card-body">
                
                <div class="row sm_padding">                    
                        <div class="col-md-6">                                    
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Company Name :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="cmyname" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Address :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <textarea name="address" class="form-control" required></textarea>
                                    </div>       
                                </div>
                                
                        </div><!-- left -->                       
                </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                        <a href="company" class="btn mybtn btn-default">Cancel</a>
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
