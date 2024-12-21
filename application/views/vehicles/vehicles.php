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
                <h3 class="card-title">List</h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="vehicles/create_form" ><i class="fa fa-plus"></i> New</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="vehicles/upload_excel" ><i class="fa fa-file-excel"></i> Excel Import</a>
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
                        <th>Model Name</th>
                        <th>Vehicle Number</th>
                        <th>Price (SGD )</th>
                        <th>Photo</th>
                        <th>Category</th>
                        <th>Available or Not</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                                $i=1;
                                foreach($allvehicleslist->result() as $row):
                              ?>  
                            <tr>
                                <td style="vertical-align: top"><?php echo $i; ?></td>
                                <td style="vertical-align: top"><a href="vehicles/car_detail/<?php echo $row->cid; ?>" style="font-size: 14px !important"><?php echo $row->model_name; ?></a></td>
                                <td style="vertical-align: top"><?php echo $row->vehicle_no; ?></td>
                                <td style="vertical-align: top"><?php echo $row->rental_price; ?></td>
                                
                                <td style="vertical-align: top" width="200">
                                    <?php if($row->photo!=""){ ?>
                                        
                                            <img src="<?php echo base_url() .'upload/files/'.$row->photo;?>" class="vehicle-photos">
                                       
                                    <?php }else{ ?>
                                        No Photo
                                    <?php } ?>
                                    
                                </td>
                                <td style="vertical-align: top"><?php echo $row->title_status;?></td>
                                <!-- <td style="vertical-align: top"><?php if($row->title_status=="1"){ ?>
                                        Popular
                                <?php }else if($row->title_status=="2"){ ?>
                                        Offers
                                <?php }else if($row->title_status=="3"){ ?>
                                        Brand New
                                <?php }else if($row->title_status=="4"){ ?>
                                        Electric
                                <?php } ?>
                                </td>   -->
                                <td style="vertical-align: top">
                                    <?php
                                       
                                        
                                        if($row->status=='1'){ ?>                                            
                                                    <a class="btn btn-warning btn-xs date_status" data-avidate="<?= $row->avidate ?>" data-id="<?= $row->id ?>" type="button" href="javascript:void(0);" >Already Rent</a>                                       
                                            
                                        <?php }else{ ?>
                                            
                                                <a class="btn btn-success btn-xs" type="button" href="javascript:void(0);" >Available</a>                             
                                            
                                        <?php }?>                                   
                                        
                                    </td>
                                <td style="vertical-align: top">
                                    <?php if($row->show_status=='0'){?>
                                        <a class="btn btn-warning btn-xs vehicle_approve" data-id="<?= $row->id ?>" type="button" href="javascript:void(0);" >Pending</a>
                                    <?php }else{?>
                                        <a class="btn btn-success btn-xs vehicle_cancel" data-id="<?= $row->id ?>" type="button" href="javascript:void(0);" >Show</a>
                                    <?php } ?>
                                </td>
                                <td style="vertical-align: top">
                                    <a class="btn btn-primary btn-xs color-white vedit" data-id="<?= $row->id ?>" href="<?php echo base_url() .'vehicles/edit_form/'.$row->cid;?>" data-id="<?= $row->cid ?>" type="button">
                                        <i class="fa fa-edit"></i> 
                                    </a>
                                    
                                    <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'vehicles/delete_vehicles/'.$row->cid;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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



<!-- Add Vehicles Modal -->
<div class="modal fade" id="modal-new-vehicles">
    <div class="modal-dialog modal-xl">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Add Vehicles</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    
                    <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="form-group">
                                            <label>Model Name</label>
                                            <input type="text" name="n_modelname" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                            <label>Brand Name</label>
                                            <select class="select2-clear form-control" name="n_brandname" data-placeholder="Brand Name" style="width: 100%;" required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach($getbrands as $key => $brand) : ?>                                                
                                                <option value="<?= $brand->brand_name ?>"><?= $brand->brand_name ?></option>                                                
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Vehicle Number</label>
                                                    <input type="text" name="n_vehicleno" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>TNC</label>
                                                    <input type="text" name="n_tnc" class="form-control" required>
                                            </div>
                                        </div>                                        
                                    </div> 
                                    
                                    <div class="form-group">
                                            <label>Category Name</label>            
                                            <select class="select3-clear form-control" name="category" data-placeholder="Category Name" style="width: 100%;" required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach(category_list() as $key => $status) : ?>
                                                <option value="<?= $key ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-md-4">
                                                <label>Service Type</label>
                                                <select id="pricestatus" class="form-control" name="n_pricestatus" >
                                                    <option value="leasing">Leasing</option>
                                                    <option value="selling">Selling</option>  
                                                </select>
                                        </div>
                                        <div class="col-md-8">
                                                <div class="form-group" id="leasing">
                                                    <label>Leasing Price / Day (SGD)</label>
                                                    <input type="text" name="n_price" class="form-control" >
                                                </div>   
                                                <div class="form-group" id="selling">
                                                    <label>Selling Price (SGD)</label>
                                                    <input type="text" name="selling_price" class="form-control"s>
                                                </div> 
                                        </div>
                                    </div> 
                                    <div class="row nopadding">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label>Year</label>
                                                    <input type="text" name="n_year" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                    <label>Consumption (litres/100 km)</label>
                                                    <input type="text" name="n_consumption" class="form-control" required>
                                            </div> 
                                        </div>
                                        
                                    </div>   
                                                                     
                                                                

                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="row nopadding">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Fuel Type</label>
                                                    <select class="select2-clear form-control" name="n_fueltype" data-placeholder="Fuel Type" style="width: 100%;" required>
                                                        <option value="">&nbsp;</option>
                                                        <?php foreach($getfueltype as $key => $fuel) : ?>
                                                        
                                                        <option value="<?= $fuel->id ?>"><?= $fuel->fuel_type ?></option>
                                                        
                                                        <?php endforeach; ?>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Body Type</label>
                                                    <select class="select2 form-control" name="n_bodytype" data-placeholder="Body Type" style="width: 100%;" >
                                                        <option value="">&nbsp;</option>
                                                        <?php foreach($getbodytype as $key => $body) : ?>
                                                        
                                                        <option value="<?= $body->id ?>"><?= $body->body_type ?></option>                                                        
                                                        <?php endforeach; ?>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="row nopadding">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Doors</label>
                                                    <input type="number" name="n_door" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Seats</label>
                                                    <input type="number" name="n_seat" class="form-control" required>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row nopadding">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Engine</label>
                                                    <input type="text" name="n_engine" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Transmission</label>
                                                    <input type="text" name="n_transmission" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="form-group">
                                            <label>Color</label>                                            
                                            <select class="select3" name="color[]" data-placeholder="Color" style="width: 100%;" multiple required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach(colors_list() as $key => $status) : ?>
                                                <option value="<?= $key ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small>Multiple colors can be selected.</small>
                                    </div> 

                                    <div class="form-group">
                                            <label>Features</label>
                                            <select class="select3-clear form-control" name="feature[]" data-placeholder="Features" style="width: 100%;" multiple required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach($getfeatures as $key => $feature) : ?>
                                                <option value="<?= $feature->name ?>"><?= $feature->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small>Multiple features can be selected.</small>
                                    </div>
                                    <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>    
                                    
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Purchase Date</label>
                                        <input name="n_purchase_date" placeholder="yyyy-mm-dd" class="form-control datepicker" type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>Registration Date</label>
                                        <input name="n_registeration_date" placeholder="yyyy-mm-dd" class="form-control datepicker" type="date">
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
                    </div>
                    <div class="row sm_toppadding">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cover Photo <span class="text-danger"> ( only jpg,png and jpeg are allowed )</span></label>
                                <input type="file" class="form-control" name="cover" required/>
                                <span class="text-danger"><div name="errmsg"></div></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Gallery ( Multiple Photos can be selected )</label>
                                <input type="file" class="form-control" name="files[]" multiple/>
                            </div> 
                        </div>
                        
                    </div>
                    <div class="col-md-12 pkginfo">
                        <h4 class="chosepkg-right"><span class="text-right btn" onclick="pkgcloneform(event)" style="float:right" ><i class="fa fa-plus"></i> Add New</span>
                        </h4>
                    </div>
                    <div id="vpkg" class="choosepackage">
                   
                    <div class="row package sm_toppadding">                    
                            <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Duration</label> 
                                        <?=form_dropdown("duration[]",$durationlist,"",'class="form-control"','required="required"')?>
                                    </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Price(SGD)</label>
                                        <input type="text" name="rentalprice[]" class="form-control" >
                                    </div>  
                            </div>
                            <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label>Status</label>  
                                        <?=form_dropdown("vstatus[]",array('false'=>'...','true'=>"Best Saver"),"","class='form-control',required='required'")?>                                     
                                        
                                    </div>  
                            </div>
                            <div class="col-md-1 col-lg-1">
                                    <div class="form-group">
                                        <span class='btn btn-danger' onclick="removerpkg(event)" style="margin-top: 20px;"> x </span>
                                    </div>  
                            </div>
                        
                    </div>  
                    
                    </div><!-- end vpkg-->
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

<!-- Edit Vehicles Modal -->
<div class="modal fade" id="modal-edit-vehicles" role="dialog">
    <div class="modal-dialog modal-xl">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" enctype="multipart/form-data" action="<?php echo site_url('vehicles/update_vehicles') ?>">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Edit Vehicles</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <input type="hidden" value="" name="id"/> 
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="form-group">
                                            <label>Model Name</label>
                                            <input type="text" name="modelname" id="" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                            <label>Brand Name</label>
                                            <select class="select2-clear form-control" name="brandname" data-placeholder="Brand Name" style="width: 100%;" required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach($getbrands as $key => $brand) : ?>                                                
                                                <option value="<?= $brand->brand_name ?>"><?= $brand->brand_name ?></option>                                                
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                    <div class="row nopadding">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Vehicle Number</label>
                                                    <input type="text" name="vehicleno" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>TNC</label>
                                                    <input type="text" name="tnc" class="form-control" >
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                            <label>Category Name</label>                                            
                                            <select class="select3 form-control" name="category" data-placeholder="Category Name" style="width: 100%;" required>
                                                <option value="">&nbsp;</option>
                                                        <?php foreach(category_list() as $key => $status) : ?>
                                                        <option value="<?= $key ?>"><?= $status ?></option>
                                                        <?php endforeach; ?>
                                            </select>
                                    </div>
                                    
                                    <div class="row nopadding">
                                        <div class="col-md-4">
                                                <label>Service Type</label>
                                                <select id="edit_pricestatus" class="form-control" name="pricestatus" >
                                                    <option value="leasing">Leasing</option>
                                                    <option value="selling">Selling</option>  
                                                </select>
                                        </div>
                                        <div class="col-md-8">
                                                <div class="form-group" id="edit_leasing">
                                                    <label>Leasing Price / Day (SGD)</label>
                                                    <input type="text" name="price" class="form-control" >
                                                </div>   
                                                <div class="form-group" id="edit_selling">
                                                    <label>Selling Price (SGD)</label>
                                                    <input type="text" name="selling_pricee" class="form-control"s>
                                                </div> 
                                        </div>
                                    </div>
                                    
                                    <div class="row nopadding">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label>Year</label>
                                                    <input type="text" name="year" id="" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                    <label>Consumption (litres/100 km)</label>
                                                    <input type="text" name="consumption" id="" class="form-control">
                                            </div> 
                                        </div>
                                        
                                    </div> 
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="row nopadding">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Fuel Type</label>
                                                    <select class="select2 form-control" name="fueltype" id="" data-placeholder="Fuel Type" style="width: 100%;" >
                                                        <option value="">&nbsp;</option>
                                                        <?php foreach($getfueltype as $key => $fuel) : ?>
                                                        
                                                        <option value="<?= $fuel->id ?>"><?= $fuel->fuel_type ?></option>
                                                        
                                                        <?php endforeach; ?>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                        <label>Body Type</label>
                                                        <select class="select3 form-control" name="bodytype" id="" data-placeholder="Body Type" style="width: 100%;" >
                                                            <option value="">&nbsp;</option>
                                                            <?php foreach($getbodytype as $key => $body) : ?>
                                                            
                                                            <option value="<?= $body->id ?>"><?= $body->body_type ?></option>
                                                            
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row nopadding">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Doors</label>
                                                    <input type="number" name="door" id="" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Seats</label>
                                                    <input type="number" name="seat" id="" class="form-control" >
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div class="row nopadding">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Engine</label>
                                                    <input type="text" name="engine" id="" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                    <label>Transmission</label>
                                                    <input type="text" name="transmission" id="" class="form-control" >
                                            </div>
                                        </div>
                                    </div>  
                                                                        
                                    <div class="form-group">
                                            <label>Color</label>
                                            
                                            <select class="select4 cc" name="color[]" id="color2" data-placeholder="Color" style="width: 100%;" multiple>
                                                <option value="">&nbsp;</option>
                                                <?php foreach(colors_list() as $key => $status) : ?>
                                                <option value="<?= $key ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small>Multiple colors can be selected.</small>
                                    </div>     
                                    <div class="form-group">
                                            <label>Features</label>                                            
                                            <select class="select4-clear xx form-control" name="feature[]" id="feature2" data-placeholder="Features" style="width: 100%;" multiple required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach($getfeatures as $key => $feature) : ?>
                                                <option value="<?= $feature->name ?>"><?= $feature->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <small>Multiple features can be selected.</small>
                                    </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12"> 
                                    <div class="form-group">
                                        <label>Purchase Date</label>
                                        <input name="purchase_date" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Registration Date</label>
                                        <input name="registeration_date" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                                    </div>
                                    <div class="form-group">
                                            <label>Description</label>
                                            <textarea cols="80" id="edit_description" name="edit_description" rows="10">
                                                <?php echo $page_content->message1; ?>
                                            </textarea>
                                            <script>
                                                CKEDITOR.replace('edit_description');
                                            </script>
                                    </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                    <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>
                                    <div class="form-group" id="photo-preview">
                                        <label>Cover Photo<span class="text-danger"> ( only jpg,png and jpeg are allowed )</span></label>
                                        <div>
                                                (No photo)
                                                <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label id="label-photo">Upload Photo </label>
                                        <div>
                                                <input name="cover" type="file" class="form-control" multiple="true" accept="image/*">
                                                <span class="help-block"></span>
                                        </div>
                                    </div>
                            </div>
                            
                        </div>
                        <div class="col-md-12 pkginfo2">
                            <h4 class="chosepkg-right">
                                <a href="javascript:void(0);" class="text-right btn" id="add-vehicles" style="float:right" >
                                        <i class="fa fa-plus"></i> Add New
                                    </a>
                            </h4>
                        </div>
                    
                        <div id="vpkg" class="row choosepackage2">
                        <div class="col-md-12 package2 sm_toppadding">  

                                <table class="table-striped table-valign-middle" id="vehicles-edit-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Duration</th>
                                            <th>Price(SGD)</th>                                        
                                            <th>Status</th>
                                            <th width="50">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>                       
                        </div>   
                        </div><!-- end vpkg-->
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" id="" class="btn btn-success">Update</button>
                    </div>
                </div>
        </form>
      </div>
      
    </div>
</div>
<!-- end edit Vehicles -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->



<div class="modal fade" id="modal-bookingavailable" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <form method="post" action="<?php echo site_url('vehicles/reset_rentedvehicle') ?>">
            <input type="hidden" name="id" id="vehi_id">
                <div class="modal-header">                  
                  <h4 class="modal-title">Available Rental Date</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        
                        <label>Available Date : </label>
                        <span id="avidate"></span>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Reset Date</button>
                </div>
        </form> 
      </div>
      
    </div>
</div>

<div class="modal fade" id="modal-vehicleapprove" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" action="<?php echo site_url('vehicles/update_vehicleapprove') ?>">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Approve Vehicles</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Do you want to show on home page?
                    <input type="hidden" name="id" >                    
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
<div class="modal fade" id="modal-vehiclecancel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" action="<?php echo site_url('vehicles/update_vehiclecancel') ?>">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Hide Vehicles</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Don't you want to show on home page?
                    <input type="hidden" name="id" >                    
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


