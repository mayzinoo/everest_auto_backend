<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insurance Quotation Request </h1>
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
                      <a class="nav-link" href="quotation_request/create_form" ><i class="fa fa-plus"></i> New</a>
                        
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
                        <th>Ln</th>
                        <th>Vehicle No.</th>
                        <th>Name/Company Name</th>
                        <th>Cover</th>
                        <th>1)InsCo</th>
                        <th>1)Prem</th>
                        <th>1)Excess</th>
                        <th>2)InsCo</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            foreach($quotationrequest->result() as $row):
                        ?> 
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>
                                    <a href="<?php echo base_url() .'quotation_request/edit_form/'.$row->id;?>" >
                                    <?php echo $row->vehiname; ?>
                                    </a>    
                                </td>                                
                                <td><?php echo $row->cmyname; ?></td>
                                <td><?php echo current(explode(':',$row->coverage)); ?></td>
                                <td><?php echo $row->insco1; ?></td>
                                <td><?php echo $row->premium1; ?></td>
                                <td><?php echo $row->excess1; ?></td>
                                <td><?php echo $row->insco2; ?></td>
                                <td>
                                    <a href="<?php echo base_url() .'quotation_request/edit_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'quotation_request/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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
          <div class="card-footer">
            <?php echo $this->pagination->create_links(); ?>
          </div>
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

