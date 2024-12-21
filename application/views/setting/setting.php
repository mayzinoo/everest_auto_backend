<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Setting</h1>
            <?php message(); ?>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
		    <div class="col-md-6">
		    	<div class="card card-default">
		    		<div class="card-header">
		                <h3 class="card-title">CHANGE SETTING</h3>
		            </div>
		            <div class="card-body">
	                	<?=form_open('setting/update_setting/')?>
        				<form action="#">
        							<input type="hidden" name="id" value="<?php echo $admin->id; ?>">
				                	<div class="form-group">
				                		<label>First Name</label>
				                        <input name="firstname" class="form-control" type="text" value="<?php echo $admin->first_name; ?>">
				                        
				                    </div>

				                    <div class="form-group">
				                    	<label>Last Name</label>
				                        <input name="lastname" class="form-control" type="text" value="<?php echo $admin->last_name; ?>">
				                    </div>

				                    <div class="form-group">
				                    	<label>Phone</label>
				                        <input name="phone" class="form-control" type="text" value="<?php echo $admin->phone; ?>">
				                    </div>

				                    <div class="form-group">
				                    	<label>Email</label>
				                        <input name="email" class="form-control" type="email" value="<?php echo $admin->email; ?>" required>
				                    </div>
				                    <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
				                        
				                        <select class="mdl-textfield__input mdl-js-menu dark_dropdown" name="role" id="role" data-placeholder="" style="width: 100%;" required>
		                                    <option value="<?php echo $admin->role; ?>"><?php echo $admin->role; ?></option>
		                                    <?php foreach(role_list() as $key => $status) : ?>
		                                    <option value="<?= $key ?>"><?= $status ?></option>
		                                    <?php endforeach; ?>
		                                </select>
				                        <label class="mdl-textfield__label" >Role</label>
				                    </div> -->
				                    <button type="submit" class="btn btn-success">Update Setting</button>
				        </form>
        				<?=form_close()?>
	                </div>
		    	</div>
		    </div>
			
		    <div class="col-md-6">
		    	<div class="card card-default">
		    		<div class="card-header">
		                <h3 class="card-title">PASSWORD SETTING</h3>
		            </div>
		            <div class="card-body">
	                	<?=form_open('setting/update_password/')?>
        				<form action="#">
        							<input type="hidden" name="id" value="<?php echo $admin->id; ?>">
				                	<div class="form-group">
				                		<label>New Password</label>
				                        <input name="password" class="form-control" type="password"  value="" required>
				                    </div>

				                    <div class="form-group">
				                    	<label>Confirm Password</label>
				                        <input name="confirm_password" class="form-control" type="password" required>
				                    </div>
				                    
					                <button type="submit" class="btn btn-success">Change Password</button>
					    </form>
        				<?=form_close()?> 
	                </div>
		    	</div>
		    </div>


      </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

