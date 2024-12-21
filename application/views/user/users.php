<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Users List</h1>
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
                      <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#modal-new-users"><i class="fa fa-plus"></i> New</a>                        
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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <!-- <th class="mdl-data-table__cell--non-numeric">Address</th> -->
                        <!-- <th width="300" class="mdl-data-table__cell--non-numeric">Message</th> -->
                        <th>Created Date</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($userslist->result() as $row):
                            ?> 
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->first_name; ?></td>
                                    <td><?php echo $row->last_name; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->phone; ?></td>
                                   
                                    <td><?php echo $row->created_date; ?></td>
                                    
                                        <?php if($row->role=='dealer'){ ?>
                                                <td class="mdl-data-table__cell--non-numeric editortxt">Dealer</td>
                                        <?php }else if($row->role=='admin'){ ?>
                                                <td class="mdl-data-table__cell--non-numeric admintxt">Admin</td>
                                        <?php }else if($row->role=='sale'){ ?>
                                                <td class="mdl-data-table__cell--non-numeric saletxt">Sale</td>
                                        <?php }else{ ?>
                                                <td class="mdl-data-table__cell--non-numeric">Customer</td>
                                         <?php } ?>
                                        
                                    
                                
                               
                                    <td>
                                        <a data-id="<?= $row->id ?>" type="button" href="javascript:void(0);" class="edit-users btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'users/delete_users/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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


<!-- Model Popup  -->
<div class="modal fade" id="modal-new-users" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
         <form method="post" id="add_users" enctype="multipart/form-data;charset=utf-8">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Add Users</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="user_firstname" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="user_lastname" class="form-control" placeholder="Last Name" required>
                        </div>
                        
                        <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="user_email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="user_phone" class="form-control" placeholder="Phone" required>

                        </div>
                        <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="user_password" class="form-control" placeholder="Password" minlength="5" required>
                        </div>
                        <div class="form-group">
                                <label>Role</label>
                                <select class="select2 form-control" name="role" data-placeholder="Role" style="width: 100%;" required>
                                    <option value="">&nbsp;</option>
                                    <?php foreach(role_list() as $key => $status) : ?>
                                    <option value="<?= $key ?>"><?= $status ?></option>
                                    <?php endforeach; ?>
                                </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="usercreateform" class="btn btn-success">Save</button>
                    </div>
                </div>
        </form>
      </div>
      
    </div>
</div>

<div class="modal fade" id="modal-edit-users" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
         <form method="post" action="<?php echo site_url('users/update_users') ?>">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Update Users</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <input type="hidden" name="id"/> 
                        <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone" required>

                        </div>
                        <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Leave empty if no change" >
                        </div>
                        <div class="form-group">
                                <label>Role</label>
                                <select class="select2" name="role" data-placeholder="Role" style="width: 100%;" required>
                                    <option value="">&nbsp;</option>
                                    <?php foreach(role_list() as $key => $status) : ?>
                                    <option value="<?= $key ?>"><?= $status ?></option>
                                    <?php endforeach; ?>
                                </select>
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

<div class="modal fade" id="modal-userapprove" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" id="update_userstatus" enctype="multipart/form-data">
                <div class="modal-header">
                  
                  <h4 class="modal-title">User role approving</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" >
                        <h5>Are you sure you want to approve as user dealer role?</h5>
                        <p>Please check users's details.</p>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" type="submit" id="usersapprove" class="btn btn-success">Approve</button>
                    </div>
                </div>
        </form>
      </div>
      
    </div>
</div>


<!-- User role cancel -->
<div class="modal fade" id="modal-usercancel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" id="cancel_userstatus" enctype="multipart/form-data">
                <div class="modal-header">
                  
                  <h4 class="modal-title">User role cancelling</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                        <h5>Are you sure you want to cancel?</h5>
                        <p>Please check users's details.</p>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" type="submit" id="userscancel" class="btn btn-success">Update</button>
                    </div>
                </div>
        </form>
      </div>
      
    </div>
</div>