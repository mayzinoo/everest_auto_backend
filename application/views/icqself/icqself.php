<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insurance Coverage Quote (ICQ)(Self)</h1>
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
                      <a class="nav-link" href="icqself/create_form" ><i class="fa fa-plus"></i> New</a>
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
                        <th>Vehicle No.</th>
                        <th>Customer/Company Name </th>
                        <th>IC/ROC No.</th>
                        <th>Insurance Company </th>
                        <th>Policy No. </th>
                        <th>POI-Start</th>
                        <th>POI-Expire</th>
                        <th>Type Of Coverage</th>
                        <th>Salesman </th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                        $i=1;
                            foreach($icqselfdata->result() as $row):
                        ?> 
                            <tr>
                                <td>
                                    <a href="<?php echo base_url() .'icqself/edit_form/'.$row->id;?>" >
                                    <?php echo $row->vehiname; ?>
                                    </a>    
                                </td>
                                <td><?php echo $row->cmyname; ?></td>
                                <td><?php echo $row->ic_no; ?></td>
                                <td><?php echo $row->insurance_cmy; ?></td>
                                <td><?php echo $row->policy_no; ?></td>
                                <td><?php echo $row->poi_startdate; ?></td>
                                <td><?php echo $row->poi_enddate; ?></td>
                                <td><?php echo $row->typeofcoverage; ?></td>
                                <td><?php echo $row->saleman; ?></td>
                                <td>
                                    <a href="<?php echo base_url() .'icqself/edit_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'icqself/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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
