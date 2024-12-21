<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ</h1>
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
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#modal-new-faq"><i class="fa fa-plus"></i> New</a>
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
                        <th>#</th>
                        <th>Main Title</th>
                        <th>Sub Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($faq->result() as $row):
                            ?> 
                                <tr>
                                    <td style="vertical-align:top"><?php echo $i; ?></td>
                                    <td style="vertical-align:top"><?php echo $row->main_title; ?></td>
                                    <td style="vertical-align:top"><?php echo $row->sub_title; ?></td>
                                    <td style="vertical-align:top"><?php echo $row->description; ?></td>
                                    <td style="vertical-align:top"><?php echo $row->created_date; ?></td>
                                    <td style="vertical-align:top">
                                        <a data-id="<?= $row->id ?>" type="button" href="javascript:void(0);" class="edit-faq btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'faq/delete_faq/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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


<!-- New FAQ -->
<div class="modal fade" id="modal-new-faq" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
         <form method="post" id="upload_faq" enctype="multipart/form-data;charset=utf-8">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Add FAQ</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                                <label>Main Title</label>
                                <input type="text" name="n_maintitle" class="form-control" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                                <label>Sub Title</label>
                                <input type="text" name="n_subtitle" class="form-control" placeholder="Title" required>
                        </div>                       
                        <div class="form-group">
                                <label>Description</label>
                                <textarea cols="80" id="description" name="description" rows="10">
                                    <?php echo $page_content->message1; ?>
                                                </textarea>
                                                <script>

                                                    CKEDITOR.replace('description');

                                                </script>
                        </div>                       
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="faqsavebtn" class="btn btn-success">Save</button>
                    </div>
                </div>
        </form>
      </div>
      
    </div>
</div>


<!-- Edit FAQ -->
<div class="modal fade" id="modal-edit-faq" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
         <form method="post" action="<?php echo site_url('faq/update_faq') ?>">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Update FAQ</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <input type="hidden" value="" name="id"/> 
                        <div class="form-group">
                                <label>Main Title</label>
                                <input type="text" name="maintitle" id="maintitle" class="form-control" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                                <label>Sub Title</label>
                                <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Title" required>
                        </div>                       
                        <div class="form-group">
                                <label>Description</label>
                                <textarea cols="80" id="faq_description" name="faq_description" rows="10">
                                    <?php echo $page_content->message1; ?>
                                                </textarea>
                                                <script>

                                                    CKEDITOR.replace('faq_description');

                                                </script>
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
<!-- end -->