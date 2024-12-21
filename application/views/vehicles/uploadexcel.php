<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicles</h1>
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
                <h3 class="card-title">Upload Excel File</h3>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <form action="<?php echo base_url();?>vehicles/upload_file" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileupload" value="" required accept=".xls, .xlsx" /><br><br>
                    <input type="submit" name="submit" value="Upload" />
                    </form>
              </div>
              <!-- /.card-body -->
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






