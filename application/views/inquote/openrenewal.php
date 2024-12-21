<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Open Renewal</h1>
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
                          <a class="nav-link" href="inquote/create_form" ><i class="fa fa-plus"></i> New</a>
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
                        <th>SNo</th>
                        <th>IC No</th>
                        <th>Name</th>
                        <th>Reg_No</th>
                        <th>Sel_ac</th>
                        <th>Allocate To</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Expire Date</th>
                        <th>Ins Co1</th>
                        <th>Q1</th>
                        <th>Ins Co2</th>
                        <th>Q2</th>
                        <th>Ins Co3</th>
                        <th>Q3</th>
                        <th>Ins Co4</th>
                        <th>Q4</th>
                        <th>Ins Co5</th>
                        <th>Q5</th>
                        <th>Ins Co6</th>
                        <th>Q6</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            foreach($open_renewaldatalist->result() as $row):
                        ?> 
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>
                                    <a href="<?php echo base_url() .'inquote/edit_form/'.$row->id;?>"><?php echo $row->ic_no; ?></a>
                                </td>
                                <td><?php echo $row->cmyname; ?></td>
                                <td><?php echo $row->vehiname; ?></td>
                                <td><?php echo $row->sel_ac; ?></td>
                                <td><?php echo $row->staff; ?></td>
                                <td><?php echo $row->brand; ?></td>
                                <td><?php echo $row->model; ?></td>
                                <td><?php echo $row->expire_date; ?></td>
                                <td><?php echo $row->ins_co1; ?></td>
                                <td><?php echo $row->q1; ?></td>
                                <td><?php echo $row->ins_co2; ?></td>
                                <td><?php echo $row->q2; ?></td>
                                <td><?php echo $row->ins_co3; ?></td>
                                <td><?php echo $row->q3; ?></td>
                                <td><?php echo $row->ins_co4; ?></td>
                                <td><?php echo $row->q4; ?></td>
                                <td><?php echo $row->ins_co5; ?></td>
                                <td><?php echo $row->q5; ?></td>
                                <td><?php echo $row->ins_co6; ?></td>
                                <td><?php echo $row->q6; ?></td>                                
                                <td>
                                    <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'inquote/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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
          </div><!-- card footer -->
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

